<?
include("../inc/dbopen.php");
include("../inc/admin_check.php");
include("../inc/stylesheet.php");

$cmd = "";
if(isset($_REQUEST["cmd"])){
	$cmd = trim($_REQUEST["cmd"]);
}
$num = $_REQUEST["num"];

if($admin_flag=="on"){
	if(isset($cmd)){
		switch($cmd){
			case "edit": 
//				header("Location:../edit_board.php?num=".$num); 
?>
<script language="javascript">
	location.replace("../edit_board.php?num=<?echo $num?>");
</script>
<?
				return;
			case "del":
//				header("Location:../del_board.php?num=".$num); 
?>
<script language="javascript">
	location.replace("../del_board.php?num=<?echo $num?>");
</script>
<?
				return;
		}
	}
}
else{
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<TABLE>
<FORM name="login_form" METHOD=POST ACTION="login_board_ok.php">
<TR>
	<TD align=center colspan=2>로그인</TD>
</TR>
<TR>
	<TD>비밀번호</TD>
	<TD><INPUT TYPE="password" NAME="pwd" size=10></TD>
</TR>
<TR>
	<TD align=center colspan=2><INPUT TYPE="button" value="로그인" onclick="javascript:return verify('login');"></TD>
</TR>
<?
}
?>

<input type=hidden name="cmd" value="<?echo $cmd?>">
<input type=hidden name="num" value="<?echo $num?>">
</FORM>

</TABLE>


<script language="javascript">

var f=document.login_form;


function verify(login_flag){
 if (login_flag=="login")
 {
		count=0
		 if( f.pwd.value != "") { 
		   count = count + 1;
		  }
		 if(count == 0 ) {
		  alert("비밀번호를 입력하시기 바랍니다.");
		        f.pwd.focus();
		        return false;
		       }
		 		f.action="login_board_ok.php";
	 }
	 else if (login_flag=="logout")
	 {
	 		f.action="logout.php";	
	 }
	 f.submit();
}

</script>


