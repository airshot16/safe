<?
include("../inc/dbopen.php");
//header("Content-Type: text/html; charset=utf-8"); 

$sql_admin="select * from " .$inc_admin_table. " where admin_id='" .$_REQUEST["admin_id"]. "'";
$result_admin = mysqli_query($conn, $sql_admin);
$row_admin=mysqli_num_rows($result_admin);

if ($row_admin > 0){
?>
	<SCRIPT LANGUAGE="JavaScript">
	<!--
		alert("이미 존재하는 관리자 아이디 입니다.");
//		history.back();
	//-->
	</SCRIPT>
<?
}else{
	$inc_idx="admin_idx";
	$inc_table=$inc_admin_table;
	include("../inc/max_idx_inc.php");

	$max_admin_idx=$max_idx;
	$sql_insert="insert into " .$inc_admin_table. " (admin_idx, admin_id, admin_pw, admin_name) values (" .$max_admin_idx. ",'" .$_REQUEST["admin_id"]. "','" .$_REQUEST["admin_pw"]. "','" .$_REQUEST["admin_name"]. "')";
	mysqli_query($conn, $sql_insert);

//	echo $sql_insert;
?>
	<SCRIPT LANGUAGE="JavaScript">
	<!--
		location.replace("./input_admin.php");
	//-->
	</SCRIPT>
<?
}	
?>

