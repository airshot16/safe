<?
$sql = "Select Max(" .$inc_idx. ") from " .$inc_table;
$result_inc = mysqli_query($conn, $sql);
$row_inc=mysqli_num_rows($result_inc);

If ($row_inc > 0){
  $max_idx = $row_inc[0] + 1;
}else{
  $max_idx = 1;
}
?>
