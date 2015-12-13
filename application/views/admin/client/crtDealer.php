<?php
$dealer_nm = "";
if(isset($_POST["dealer_nm"])){
	$dealer_nm = trim($_POST["dealer_nm"]);
}

$cmpy_nm = "";
if(isset($_POST["cmpy_nm"])){
	$cmpy_nm = trim($_POST["cmpy_nm"]);
}

$worker_seq = "NULL";
if(isset($_POST["worker_seq"]) && trim($_POST["worker_seq"])!=""){
	$worker_seq = $_POST["worker_seq"];
}

$dealer_seq = "NULL";
if(isset($_POST["dealer_seq"])){
	$dealer_seq = $_POST["dealer_seq"];
}

$premium_rate = "NULL";
if(isset($_POST["premium_rate"]) && trim($_POST["premium_rate"])!=""){
	$premium_rate = trim($_POST["premium_rate"]);
}

$tel = "";
if(isset($_POST["tel"])){
	$tel = trim($_POST["tel"]);
}

$bank_atcd = "";
if(isset($_POST["bank_atcd"])){
	$bank_atcd = $_POST["bank_atcd"];
}

$addr = "";
if(isset($_POST["addr"])){
	$addr = trim($_POST["addr"]);
}

$nation_atcd = "";
if(isset($_POST["nation_atcd"])){
	$nation_atcd = $_POST["nation_atcd"];
}

$gender_atcd = "";
if(isset($_POST["gender_atcd"])){
	$gender_atcd = $_POST["gender_atcd"];
}

$usr_email = "";
if(isset($_POST["usr_email"])){
	$usr_email = trim($_POST["usr_email"]);
}

$fax = "";
if(isset($_POST["fax"])){
	$fax = trim($_POST["fax"]);
}

$job_tit = "";
if(isset($_POST["job_tit"])){
	$job_tit = trim($_POST["job_tit"]);
}

$cntry_atcd = null;
if(isset($_POST["cntry_atcd"])){
	$cntry_atcd = $_POST["cntry_atcd"];
}

$homepage = "";
if(isset($_POST["homepage"])){
	$homepage = trim($_POST["homepage"]);
}

$exper_years = "";
if(isset($_POST["exper_years"])){
	$exper_years = trim($_POST["exper_years"]);
}

$maincust_atcd = "";
if(isset($_POST["maincust_atcd"])){
	$maincust_atcd = $_POST["maincust_atcd"];
}

$comments = "";
if(isset($_POST["comments"])){
	$comments = $_POST["comments"];
}

$mkt_inf = "";
if(isset($_POST["mkt_inf"])){
	$mkt_inf = $_POST["mkt_inf"];
}

	
session_start();

//$this->db->trans_off();
$this->db->trans_begin();

if(isSet($_POST['usr_email'])){
	
	$dealer_nm = mysqli_real_escape_string($this-> db-> conn_id, $dealer_nm);
	$cmpy_nm = mysqli_real_escape_string($this-> db-> conn_id, $cmpy_nm);
#	$premium_rate = mysqli_real_escape_string($this-> db-> conn_id, $premium_rate);
	$tel = mysqli_real_escape_string($this-> db-> conn_id, $tel);
	$bank_atcd = mysqli_real_escape_string($this-> db-> conn_id, $bank_atcd);
	$addr = mysqli_real_escape_string($this-> db-> conn_id, $addr);
	$nation_atcd = mysqli_real_escape_string($this-> db-> conn_id, $nation_atcd);
	$gender_atcd = mysqli_real_escape_string($this-> db-> conn_id, $gender_atcd);
	$usr_email = mysqli_real_escape_string($this-> db-> conn_id, $usr_email);
	$fax = mysqli_real_escape_string($this-> db-> conn_id, $fax);
	$job_tit = mysqli_real_escape_string($this-> db-> conn_id, $job_tit);
#	$cntry_atcd = mysqli_real_escape_string($this-> db-> conn_id, $cntry_atcd);
	$homepage = mysqli_real_escape_string($this-> db-> conn_id, $homepage);
	$exper_years = mysqli_real_escape_string($this-> db-> conn_id, $exper_years);
	$maincust_atcd = mysqli_real_escape_string($this-> db-> conn_id, $maincust_atcd);
	$comments = mysqli_real_escape_string($this-> db-> conn_id, $comments);
	$mkt_inf = mysqli_real_escape_string($this-> db-> conn_id, $mkt_inf);

	
	
	$sql = "SELECT * FROM om_user";
	$sql = $sql . " WHERE usr_email ='" .$usr_email. "'";
#	echo $sql;
	
	$result=mysqli_query($this-> db-> conn_id, $sql);
	$count=mysqli_num_rows($result);
	
	$row=mysqli_fetch_array($result);
	
	if($count==0)
	{
		$sql_user = "INSERT INTO om_user";
		$sql_user = $sql_user . "(uid, pswd, auth_grp_cd, usr_nm, usr_email, gender_atcd, nation_atcd, join_dt, active_yn, crt_dt, crt_uid)";
		$pswd = "'dealer123'";
		if(SBM_DOMAIN=="http://www.trdoc.net"){
			$pswd = "concat(substring(MD5(RAND()), -6),'d1')";
		}
		$sql_user = $sql_user . "VALUES ('" .$usr_email. "', " .$pswd. ", 'UD', '" .$dealer_nm. "', '" .$usr_email. "', '" .$gender_atcd. "', '" .$nation_atcd. "', now(), 'Y', now(), '" .$usr_email. "')";
#		echo $sql_user;
		$result = $this->db->query($sql_user);
		$qryInfo['qryInfo']['sql'] = $sql_user;
		$qryInfo['qryInfo']['result'] = $result;
		
		$sql_dealer = "INSERT INTO om_dealer";
		$sql_dealer = $sql_dealer . "(dealer_uid, dealer_nm, cmpy_nm, job_tit, addr, tel, fax, homepage, exper_years, maincust_atcd, comments, mkt_inf, premium_rate, bank_atcd";
		$sql_dealer = $sql_dealer . ", attn, aprv_yn, worker_seq, crt_dt, crt_uid)"; 
		$sql_dealer = $sql_dealer . " VALUES ('" .$usr_email. "', '" .$dealer_nm. "', '" .$cmpy_nm. "', '" .$job_tit. "', '" .$addr. "', '" .$tel. "', '" .$fax. "', '" .$homepage. "', '" .$exper_years. "', '" .$maincust_atcd. "', '" .$comments. "', '" .$mkt_inf. "', " .$premium_rate. ", '" .$bank_atcd. "'";
		if($gender_atcd!=""){
			$sql_dealer = $sql_dealer . ", (select concat(atcd_nm, ' ', '" .$dealer_nm. "') from cm_cd_attr where cd = 'US30' and atcd = '" .$gender_atcd. "')";
		}else{
			$sql_dealer = $sql_dealer . ", '" .$dealer_nm. "'";
		}
		$sql_dealer = $sql_dealer . ", 'N'";  // Front
		$sql_dealer = $sql_dealer .", " .$worker_seq. ", now(), '" .$usr_email. "')";
#		echo $sql_dealer;
		$result2 = $this->db->query($sql_dealer);
		$qryInfo['qryInfo']['sql2'] = $sql_dealer;
		$qryInfo['qryInfo']['result2'] = $result2;
		
		for($i_cntry=0; $i_cntry < sizeof($cntry_atcd); $i_cntry++)
		{
			$sql_cntry = "INSERT INTO om_dealer_cntry";
			$sql_cntry = $sql_cntry . "(dealer_seq, cntry_atcd, crt_dt, crt_uid) ";
			$sql_cntry = $sql_cntry . "VALUES (LAST_INSERT_ID(), '" .$cntry_atcd[$i_cntry]. "', now(), '" .$usr_email. "')";
#			echo $sql_cntry;
			$result3 = $this->db->query($sql_cntry);
			$qryInfo['qryInfo']['qryList'][$i_cntry]['sql3'] = $sql_cntry;
			$qryInfo['qryInfo']['qryList'][$i_cntry]['result3'] = $result3;
		}
				
		echo json_encode($qryInfo);			
	}
	
}

if ($this->db->trans_status() === FALSE)
{
	$this->db->trans_rollback();
}
else
{
	$this->db->trans_commit();
}

?>
