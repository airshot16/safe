<?php
$id = $_REQUEST["id"];

$SQL = "SELECT a.id, a.invdate, a.amount,a.tax,a.total,a.note FROM invheader a WHERE a.id=".$id;
$result = mysqli_query($this-> db-> conn_id,  $SQL ) or die("Couldn t execute query.".mysqli_error($this-> db-> conn_id));
$row = mysqli_fetch_array($result);

$responce['viewPart']['id'] = $row['id'];
$responce['viewPart']['invdate'] = $row['invdate'];

echo json_encode($responce);
?>
