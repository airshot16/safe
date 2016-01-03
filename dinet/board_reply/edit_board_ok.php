<?
include("./inc/dbopen.php");

$num = $_REQUEST["num"];
$name = stripslashes ($_REQUEST["name"]); 
$pwd = stripslashes ($_REQUEST["pwd"]); 
$title = addslashes ($_REQUEST["title"]); 
$content = addslashes ($_REQUEST["content"]); 
 
$sql = "update " .$inc_board_table;
$sql = $sql . " set ";
$sql = $sql . " name='" .$name . "'" ;
$sql = $sql . ", pwd='" .$pwd . "'" ;
$sql = $sql . ", title='" .$title . "'" ;
$sql = $sql . ", content='" .$content . "'";
$sql = $sql . ", writeday=now()" ;
$sql = $sql . ", readnum=0";
$sql = $sql . " where num=" .$num;

mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<script language="javascript">
	location.replace("list_board.php");
</script>

