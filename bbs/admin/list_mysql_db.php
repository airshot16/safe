<?
require("../inc/dbopen.php");

$result = mysql_list_dbs($conn); 
$num_rows = mysql_num_rows($result); 

while($db_data = mysql_fetch_row($result)) { 
echo $db_data[0]. "<BR>"; 
$result2 = mysql_list_tables($db_data[0]); 
$num_rows2 = mysql_num_rows($result2); 
while($table_data = mysql_fetch_row($result2)) echo "--" . $table_data[0]. "<BR>"; 
echo "==> $num_rows2 table(s) in " . $db_data[0] . "<P>"; 
} 
?>
