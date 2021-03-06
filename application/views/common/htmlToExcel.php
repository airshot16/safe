<?
require $_SERVER["DOCUMENT_ROOT"] . '/include/user/auth.php';

header("Pragma: public");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Cache-Control: public");

header("Content-Description: File Transfer");

header("Content-Type: application/vnd.ms-excel");

$pi_no = ""; 
if(isset($_REQUEST["pi_no"])){
	$pi_no = $_REQUEST["pi_no"];
}

$pi_sndmail_seq = ""; 
if(isset($_REQUEST["pi_sndmail_seq"])){
	$pi_sndmail_seq = $_REQUEST["pi_sndmail_seq"];
}

$po_no = "";
if(isset($_REQUEST["po_no"])){
	$po_no = $_REQUEST["po_no"];
}
$sndmail_atcd = $_REQUEST["sndmail_atcd"];

$sndmail_atcd_nm = "";
$filename = "(PI-" .$pi_no. ").xls";

$ctnt = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/include/email/".$sndmail_atcd.".php");
if ($sndmail_atcd == "00700211" or $sndmail_atcd == "00700411") { // PI, CI
	
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/outer/readInvoice.php");
	
	if ($sndmail_atcd == "00700211") { // PI
		$sndmail_atcd_nm = "Proforma_Invoice";
		$invoiceClass=new InvoiceClass();
		$invoice = $invoiceClass->readInvoice($this->db->conn_id, $pi_no);
		$ctnt = $invoiceClass->getPiMailCtnt ( $ctnt, $invoice );
		if($pi_sndmail_seq!=""){
			$ctnt = str_replace("@pi_sndmail_seq", "-" .$pi_sndmail_seq, $ctnt);
		}else{
			$ctnt = str_replace("@pi_sndmail_seq", "", $ctnt);
		}
	} else if ($sndmail_atcd == "00700411") { // CI
		$sndmail_atcd_nm = "Commercial_Invoice";
		$invoiceClass=new InvoiceClass();
		$invoice = $invoiceClass->readInvoice($this->db->conn_id, $pi_no);
		$ctnt = $invoiceClass->getCiMailCtnt ( $ctnt, $invoice );
	}
} else if ($sndmail_atcd == "00700311") { // 생산의뢰서
	$po_no = "";
	if (isset ( $_REQUEST ["po_no"] )) {
		$po_no = $_REQUEST ["po_no"];
	}
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/order/readEqpOrder.php");
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/docs/readPrdReq.php");
	
	$eqpOrderClass=new EqpOrderClass();
	$prdReq = $eqpOrderClass->readEqpOrder($this->db->conn_id, $pi_no, $po_no);

	$prdReqClass=new PrdReqClass();
	$prdReq = $prdReqClass->readPrdReq ($this->db->conn_id, $prdReq, $pi_no, $po_no );
	
	$sndmail_atcd_nm = "생산의뢰서";
	$ctnt = $prdReqClass->getPrdReqMailCtnt ( $ctnt, $prdReq );
} else if ($sndmail_atcd == "00700321") { // 부품출고의뢰서
	$swp_no = "";
	if (isset ( $_REQUEST ["swp_no"] )) {
		$swp_no = $_REQUEST ["swp_no"];
	}
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/order/readPartOrder.php");
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/docs/readPartReq.php");
	
	$partOrderClass=new PartOrderClass();
	$partReq = $partOrderClass->readPartOrder($this->db->conn_id, $pi_no, $swp_no);
	
	$partReqClass=new PartReqClass();
	$partReq = $partReqClass->readPartReq ($this->db->conn_id, $partReq, $pi_no, $swp_no );
	
	$sndmail_atcd_nm = "부품출고의뢰서";
	$ctnt = $partReqClass->getPartReqMailCtnt ( $ctnt, $partReq );
} else if ($sndmail_atcd == "00700511") { // 출고전표
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/docs/readSlip.php");
	
	$slipClass=new SlipClass();
	$slip = $slipClass->readSlip($this->db->conn_id, $pi_no);
	$sndmail_atcd_nm = "출고전표";
	$ctnt = $slipClass->getSlipMailCtnt ( $ctnt, $slip );
} else if ($sndmail_atcd == "00700611") { // Packing List
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/outer/readInvoice.php");
	$invoiceClass=new InvoiceClass();
	$invoice = $invoiceClass->readInvoice($this->db->conn_id, $pi_no);
	
	include ($_SERVER ["DOCUMENT_ROOT"] . "/application/views/admin/outer/readPacking.php");

	$sndmail_atcd_nm = "Packing_List";
	$packingClass=new PackingClass();
	$ctnt = $packingClass->getPackingMailCtnt($ctnt, $invoice);
}
$ctnt = str_replace ( "@base_url", TRD_DOMAIN, $ctnt );

$filename = $sndmail_atcd_nm. "(PI-" .$pi_no. ").xls";  //파일명

Header("Content-Disposition:attachment; filename=".iconv("UTF-8", "cp949", $filename).";");
echo $ctnt;
?>
