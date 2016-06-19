<?
include("../inc/dbopen.php");
//header("Content-Type: text/html; charset=utf-8"); 

$cmd = $_REQUEST["cmd"];
$num = $_REQUEST["num"];
$pwd = $_REQUEST["pwd"];

$sql_owner="select * from " .$inc_board_table. " where num='" .$num. "' and pwd='" .$pwd. "'";
$result = mysqli_query($conn, $sql_owner);
$row=mysqli_num_rows($result);

if($row> 0){
?>	
	<script language="javascript">
<?
	switch($cmd)
	{
		case "edit":
?>
		location.replace("../edit_board.php?num=<?echo $num?>");
<?
		break;

		case "del":
?>
		location.replace("../del_board.php?num=<?echo $num?>");
<?
		break;
	}
?>	
	</script>
<?
}else{
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
	<script language="javascript">
		alert("비밀번호를 확인바랍니다.");
		history.back();
	</script>
<?
}
?>
