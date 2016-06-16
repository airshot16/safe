<?
require_once APPPATH."/third_party/PHPMailer/class.phpmailer.php";
//header("Content-Type: text/html; charset=utf-8"); 

$sndmail_seq = $_REQUEST["sndmail_seq"];
$atcd = "";
if(isset($_REQUEST["atcd"])){
	$atcd = $_REQUEST["atcd"];
}

$pub_email = "";
$sales_email = "";

session_start();


$mail = new PHPMailer(); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {

    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";

    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
//    $mail->AddReplyTo('name@yourdomain.com', 'First Last');
//    $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
    
	if(TRD_DOMAIN=="http://www.trdoc.net"){
		$mail->Host = TRD_SMTP_HOST; // email 보낼때 사용할 서버를 지정
#		$mail->SMTPSecure = "ssl"; // SSL을 사용함
		$mail->Username   = TRD_SMTP_USER; 
		$mail->Password   = TRD_SMTP_PASS; 
	    $mail->SMTPAuth = true; // SMTP 인증을 사용함
	    $mail->Port = TRD_SMTP_PORT; // email 보낼때 사용할 서버를 지정

	    $pub_email = TRD_PUB_EMAIL;
	    $sales_email = TRD_SALES_EMAIL;
	}else{
		$mail->Host = LOCAL_SMTP_HOST; // email 보낼때 사용할 서버를 지정
		$mail->Username   = LOCAL_SMTP_USER; // 
		$mail->Password   = LOCAL_SMTP_PASS; // 
	    $mail->SMTPAuth = true; // SMTP 인증을 사용함
	    $mail->Port = LOCAL_SMTP_PORT; // email 보낼때 사용할 서버를 지정
	    
	    $pub_email = LOCAL_PUB_EMAIL;
	    $sales_email = LOCAL_SALES_EMAIL;
#		echo "atcd:" .$atcd;
	}
	
	$sql3 = "SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd";
	$sql3 = $sql3 . ",(select usr_nm from om_user where uid = a.sender_email) sender_nm";
	$sql3 = $sql3 . ",(select usr_nm from om_user where uid = b.email_to) rcpnt_nm";
//	$sql3 = $sql3 . ",(select if(a.wrk_tp_atcd='00700210',pi_no,'') from om_invoice where pi_sndmail_seq = a.sndmail_seq) pi_no";
	$sql3 = $sql3 . " FROM om_sndmail a, om_sndmail_dtl b";
	$sql3 = $sql3 . " WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=" .$sndmail_seq. " and snd_yn='N'";

	$qryInfo['qryInfo']['sql3'] = $sql3;
#	$result3 = mysqli_query($this-> db-> conn_id,  $sql3);
    $result3 = $this->db->query($sql3);

	$i=0;
    $qryResult = "";
	foreach($result3->result_array() as $row) {
		$qryResult['sndMail'][$i]['sndmail_seq'] = $row['sndmail_seq'];
		$qryResult['sndMail'][$i]['wrk_tp_atcd'] = $row['wrk_tp_atcd'];
		$qryResult['sndMail'][$i]['sender_email'] = $row['sender_email'];
		$qryResult['sndMail'][$i]['sender_nm'] = $row['sender_nm'];
		$qryResult['sndMail'][$i]['snd_no'] = $row['snd_no'];
		$qryResult['sndMail'][$i]['email_from'] = $row['email_from'];
		$qryResult['sndMail'][$i]['email_to'] = $row['email_to'];
		$qryResult['sndMail'][$i]['title'] = $row['title'];
		$qryResult['sndMail'][$i]['ctnt'] = $row['ctnt'];
		$qryResult['sndMail'][$i]['rcpnt_nm'] = $row['rcpnt_nm'];
		$qryResult['sndMail'][$i]['pi_no'] = $row['pi_no'];
		$i++;
	    
	    $mail->SetFrom($pub_email, "TRDOC Corp.");
/*	    
 		if($row['rcpnt_tp_atcd']=="00100010"){  // if dealer
			$mail->SetFrom($row['email_from'], $row['rcpnt_nm']); // test
	    }else{
	    	if($row['rcpnt_team_atcd']=="00600SL0"){
	    		$mail->SetFrom($row['email_from'], "SBM");
	    	}else{
	    		$mail->SetFrom($row['email_from'], $row['sender_nm']);
	    	}
	    }
 */	    
	    if($atcd=="test"){
		    $mail->AddAddress(LOCAL_TEST_EMAIL, $row['rcpnt_nm']); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
	    }else{
	    	if(TRD_DOMAIN=="http://www.trdoc.net"){
		    	$mail->AddAddress($row['email_to'], $row['rcpnt_nm']); 
	    	}else if(TRD_DOMAIN=="http://localhost:9090"){
	    		$mail->AddAddress(LOCAL_TEST_EMAIL);
	    	}
	    }
	    $mail->Subject = $row['title']; // 메일 제목
	    $mail->MsgHTML($row['ctnt']); // 메일 내용 (HTML 형식도 되고 그냥 일반 텍스트도 사용 가능함)
	    
		if($row['rcpnt_tp_atcd']=="00100010"){  // if dealer
	    	if($row['wrk_tp_atcd']=="00700110" || $row['wrk_tp_atcd']=="00700410" || $row['wrk_tp_atcd']=="00700610"){  // if 주문서, CI, Packing
	    		$mail->addBCC($sales_email);
	    	}
	    	if($row['wrk_tp_atcd']=="00700210"){  // if PI
	    		$filename = "PI-" .$row['pi_no']. "-" .$row['sndmail_seq']. ".xls";
		    	$path = $_SERVER["DOCUMENT_ROOT"]."/files/attach/";
		    	$f = fopen($path.$filename,"w+");
		    	fwrite($f, $row['ctnt']);
		    	fclose($f);
	    		$mail->AddAttachment($path.$filename); // attachment
	    	}
	    }
	    if($row['wrk_tp_atcd']!="00700310" && $row['wrk_tp_atcd']!="00700320" && $row['wrk_tp_atcd']!="00700510"){  // if not 의뢰서/출고전표
		    $mail->AddAttachment($_SERVER["DOCUMENT_ROOT"]."/images/common/foot_copyright.gif"); // attachment
	    }
	    
#	    if($row['rcpnt_tp_atcd']=="00100010"){  // test - if the target is dealer -> do not send yet.
		    $mail->Send();
#	    }
	
		$sql = "UPDATE om_sndmail_dtl";
		$sql = $sql . " SET snd_yn = 'Y'";
		$sql = $sql . " WHERE sndmail_seq = " .$sndmail_seq;
		$sql = $sql . " and snd_no = " .$row['snd_no'];

		$result = $this->db->query($sql);
		$qryInfo['qryInfo'][$i]['sql'] = $sql;
		$qryInfo['qryInfo'][$i]['result'] = $result;
	    
		echo json_encode($qryInfo);
    
	}
    
}

catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
}
?>