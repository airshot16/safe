<?
include("../inc/dbopen.php");
//header("Content-Type: text/html; charset=utf-8"); 

$sql_admin="select * from " .$inc_admin_table. " where admin_id='" .$_REQUEST["admin_id"]. "' and admin_pw='" .$_REQUEST["pwd"]. "'";
$result = mysqli_query($conn, $sql_admin);
$row=mysqli_num_rows($result);
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<?
if($row > 0){
	mysqli_data_seek($result,0);
	$row_seek=mysqli_fetch_array($result);
	$_SESSION["session_admin_id"] = $row_seek["admin_id"];
	$admin_flag="on";
?>	
<script language="javascript">
	alert("<?echo $_SESSION["session_admin_id"]?>님 환영합니다.");
	location.replace("../list_board.php");
</script>
<?
}else{
?>
<script language="javascript">
	alert("관리자등록을 확인바랍니다.");
	history.back();
</script>
<?          
}
#		mysql_close($conn);
?>		

