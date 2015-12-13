<?php
$pi_no = $_REQUEST["pi_no"];

include($_SERVER["DOCUMENT_ROOT"] . "/application/views/admin/docs/readSlip.php");

$slipClass=new SlipClass();
$slip = $slipClass->readSlip($this->db->conn_id, $pi_no);

echo json_encode($slip);
?>
