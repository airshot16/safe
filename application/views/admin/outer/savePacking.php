<?php
require $_SERVER["DOCUMENT_ROOT"] . '/include/user/authAdm.php';

$pi_no = $_POST["pi_no"];

$eqp_carton_no =  "";
if(isset($_POST["eqp_carton_no"])){
	$eqp_carton_no = trim($_POST["eqp_carton_no"]);
}

$part_carton_no =  "";
if(isset($_POST["part_carton_no"])){
	$part_carton_no = trim($_POST["part_carton_no"]);
}

$addon_carton_no =  "";
if(isset($_POST["addon_carton_no"])){
	$addon_carton_no = trim($_POST["addon_carton_no"]);
}

$part_cartons = null;
if(isset($_POST["part_cartons"])){
	$part_cartons = trim($_POST["part_cartons"]);
}

$addon_cartons = null;
if(isset($_POST["addon_cartons"])){
	$addon_cartons = trim($_POST["addon_cartons"]);
}

$eqp_gross_wgt = null;
if(isset($_POST["eqp_gross_wgt"])){
	$eqp_gross_wgt = trim($_POST["eqp_gross_wgt"]);
}

$part_gross_wgt = null;
if(isset($_POST["part_gross_wgt"])){
	$part_gross_wgt = trim($_POST["part_gross_wgt"]);
}

$addon_gross_wgt = null;
if(isset($_POST["addon_gross_wgt"])){
	$addon_gross_wgt = trim($_POST["addon_gross_wgt"]);
}

$tot_cartons = null;
if(isset($_POST["tot_cartons"])){
	$tot_cartons = trim($_POST["tot_cartons"]);
}

$tot_gross_wgt = null;
if(isset($_POST["tot_gross_wgt"])){
	$tot_gross_wgt = trim($_POST["tot_gross_wgt"]);
}



$tot_eqp_qty = null;
if(isset($_POST["tot_eqp_qty"])){
	$tot_eqp_qty = trim($_POST["tot_eqp_qty"]);
}


if(isSet($_POST['pi_no'])){
	
	$pi_no = mysqli_real_escape_string($this-> db-> conn_id, $pi_no);
	$eqp_carton_no = mysqli_real_escape_string($this-> db-> conn_id, $eqp_carton_no);
	$part_carton_no = mysqli_real_escape_string($this-> db-> conn_id, $part_carton_no);
	$addon_carton_no = mysqli_real_escape_string($this-> db-> conn_id, $addon_carton_no);
	
	$sql = "SELECT (select atcd_nm from cm_cd_attr where cd = '0070' and atcd = a.wrk_tp_atcd) txt_wrk_tp_atcd FROM om_ord_inf";
	$sql = $sql . " WHERE pi_no ='" .$pi_no. "'";
	$sql = $sql . " AND wrk_tp_atcd = '00700610'";  // 00700610(Packing List 발송)
#	echo $sql;
	
	$result=mysqli_query($this-> db-> conn_id, $sql);
	
	if($result!=null){
#		$txt_wrk_tp_atcd = mysql_result($result,0,"txt_wrk_tp_atcd");
		$txt_wrk_tp_atcd = $result->fetch_array()["txt_wrk_tp_atcd"];
		$qryInfo['qryInfo']['todo'] = "N";
		$qryInfo['qryInfo']['txt_wrk_tp_atcd'] = $txt_wrk_tp_atcd;
		
	}else{
		$qryInfo['qryInfo']['todo'] = "Y";
		
		$tot_cartons = $tot_eqp_qty + $part_cartons + $addon_cartons;
		$tot_gross_wgt = $eqp_gross_wgt + $part_gross_wgt + $addon_gross_wgt;
		
		if($tot_eqp_qty==null){
			$tot_eqp_qty = "null";
		}
		if($part_cartons==null){
			$part_cartons = "null";
		}
		if($addon_cartons==null){
			$addon_cartons = "null";
		}
		if($eqp_gross_wgt==null){
			$eqp_gross_wgt = "null";
		}
		if($part_gross_wgt==null){
			$part_gross_wgt = "null";
		}
		if($addon_gross_wgt==null){
			$addon_gross_wgt = "null";
		}

		$sql_packing = "INSERT INTO om_packing";
		$sql_packing = $sql_packing . " (pi_no, eqp_carton_no, part_carton_no, addon_carton_no, part_cartons, addon_cartons, eqp_gross_wgt, part_gross_wgt, addon_gross_wgt, tot_cartons, tot_gross_wgt, crt_dt, crt_uid)";
		$sql_packing = $sql_packing . " VALUES ('" .$pi_no. "', '" .$eqp_carton_no. "', '" .$part_carton_no. "', '" .$addon_carton_no. "', " .$part_cartons. ", " .$addon_cartons. ", " .$eqp_gross_wgt. ", " .$part_gross_wgt. ", " .$addon_gross_wgt. ", " .$tot_cartons. ", " .$tot_gross_wgt. ", now(), '" .$_SESSION['ss_user']['uid']. "')";
		$sql_packing = $sql_packing . " ON DUPLICATE KEY";
		$sql_packing = $sql_packing . " UPDATE";
		$sql_packing = $sql_packing . "   eqp_carton_no = '" .$eqp_carton_no. "'";
		$sql_packing = $sql_packing . " , part_carton_no = '" .$part_carton_no. "'";
		$sql_packing = $sql_packing . " , addon_carton_no = '" .$addon_carton_no. "'";
		$sql_packing = $sql_packing . " , part_cartons = " .$part_cartons;
		$sql_packing = $sql_packing . " , addon_cartons = " .$addon_cartons;
		$sql_packing = $sql_packing . " , eqp_gross_wgt = " .$eqp_gross_wgt;
		$sql_packing = $sql_packing . " , part_gross_wgt = " .$part_gross_wgt;
		$sql_packing = $sql_packing . " , addon_gross_wgt = " .$addon_gross_wgt;
		$sql_packing = $sql_packing . " , tot_cartons = " .$tot_cartons;
		$sql_packing = $sql_packing . " , tot_gross_wgt = " .$tot_gross_wgt;
		$sql_packing = $sql_packing . " , udt_uid = '" .$_SESSION['ss_user']['uid']. "'";
						
		log_message('debug', $sql_packing);
		
		$result2 = mysqli_query($this-> db-> conn_id, $sql_packing);
		$qryInfo['qryInfo']['sql2'] = $sql_packing;
		$qryInfo['qryInfo']['result2'] = $result2;
		
	}
	echo json_encode($qryInfo);
	
}
?>
