<?php
$pi_no = $_REQUEST["pi_no"];
$swp_no = $_REQUEST["swp_no"];

include($_SERVER["DOCUMENT_ROOT"] . "/application/views/admin/order/readPartOrder.php");

include($_SERVER["DOCUMENT_ROOT"] . "/application/views/admin/docs/readPartReq.php");

$partOrderClass=new PartOrderClass();
$partReq = $partOrderClass->readPartOrder($this->db->conn_id, $pi_no, $swp_no);

$partReqClass=new PartReqClass();
$partReq = $partReqClass->readPartReq($this->db->conn_id, $partReq, $pi_no, $swp_no);

echo json_encode($partReq);
?>
