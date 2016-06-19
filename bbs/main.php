<?	
include("./list.php");

if (isset($_SESSION["session_admin_id"])){	?>			
<TR>
	<TD align=center colspan=2>login ID:<?echo $_SESSION["session_admin_id"]?></TD>
</TR>
<TR>
	<TD align=center colspan=2><INPUT TYPE="button" value="로그아웃" onclick="javascript:location.replace('./admin/logout.php');"></TD>
</TR>
<?
}

?>

