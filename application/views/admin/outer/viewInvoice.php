<?php
include($_SERVER["DOCUMENT_ROOT"] . "/application/views/admin/outer/readInvoice.php");

$pi_no = $_REQUEST["pi_no"];

$invoiceClass=new InvoiceClass();
$invoice = $invoiceClass->readInvoice($this->db->conn_id, $pi_no);

echo json_encode($invoice);
?>
