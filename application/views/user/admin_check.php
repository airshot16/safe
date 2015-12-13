<?
$admin_flag="off";
if (isset($_SESSION["login_user"])){
	$sql="select auth_grp_cd from om_admin where adm_uid='". $_SESSION["login_user"]. "'";

	$result = mysqli_query($this-> db-> conn_id, $sql);
	$row_admin=mysqli_num_rows($result);
	if ($row_admin > 0) 	   //회원아이디가 존재하면
	{
		$auth_grp_cd = mysql_result($result,0,0);

		if($auth_grp_cd=="SA"){
			$admin_flag="on";
		}
	}
}else{
?>	
<script type="text/javascript">
	parent.location.replace("/admin");
</script>
<?
}
?>
