<?
$admin_flag="off";
if (isset($_SESSION["session_admin_id"])){
	$sql="select admin_name from " .$inc_admin_table. " where admin_id='". $_SESSION["session_admin_id"]. "'";

	$result = mysqli_query($conn, $sql);
	$row_admin=mysqli_num_rows($result);
	if ($row_admin > 0) 	   //회원아이디가 존재하면
	{
		$admin_name_str = mysqli_data_seek($result,0);

		if($_SESSION["session_admin_id"]=="admin"){
			$admin_flag="on";
		}
	}
}else{
?>	
<script language="javascript">
	location.replace("/bbs/admin/login_admin.php");
</script>
<?
}
?>
