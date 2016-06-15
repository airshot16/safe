<?
include("../inc/dbopen.php");
include("../inc/stylesheet.php");

$cmd = "";
if(isset($_REQUEST["cmd"])){
	$cmd = trim($_REQUEST["cmd"]);
}
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<TABLE>
<FORM METHOD=POST ACTION="login_ok.php">
<?	if (isset($_SESSION["session_admin_id"])){	?>			
<TR>
	<TD align=center colspan=2><?echo $_SESSION["session_admin_id"]?>님 환영합니다.</TD>
</TR>
<TR>
	<TD align=center colspan=2><INPUT TYPE="button" value="로그아웃" onclick="javascript:return verify('logout');"></TD>
</TR>
<?
}else{
?>
<TR>
	<TD align=center colspan=2>로그인</TD>
</TR>
<TR>
	<TD>아이디</TD>
	<TD><INPUT TYPE="text" NAME="admin_id" size=10></TD>
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
</FORM>

</TABLE>


<script language="javascript">

var f=document.forms[0];


function verify(login_flag){
 if (login_flag=="login")
 {
		 count=0
		 if( f.admin_id.value != "") { 
		   count = count + 1;
		  }
		 if(count == 0 ) {
		  alert("관리자아이디를 입력하시기 바랍니다.");
		        f.admin_id.focus();
		        return false;
		       }

		count=0
		 if( f.pwd.value != "") { 
		   count = count + 1;
		  }
		 if(count == 0 ) {
		  alert("비밀번호를 입력하시기 바랍니다.");
		        f.pwd.focus();
		        return false;
		       }
		 		f.action="login_ok.php";
	 }
	 else if (login_flag=="logout")
	 {
	 		f.action="logout.php";	
	 }
	 f.submit();
}

</script>


