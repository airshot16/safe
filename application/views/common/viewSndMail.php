<?php 
require $_SERVER["DOCUMENT_ROOT"] . '/include/user/auth.php';

$sndmail_seq = $_REQUEST["sndmail_seq"];

$sql = "SELECT a.* ";
$sql = $sql . " FROM om_sndmail a";
$sql = $sql . "  WHERE a.sndmail_seq = " .$sndmail_seq;

//$result = mysqli_query($this-> db-> conn_id,  $sql ) or die("Couldn t execute query.".mysql_error());
//$row = mysqli_fetch_array($result);
//echo $row2['ctnt'];

$query = $this->db->query($sql);
echo $query->row(0)->ctnt;
?>
