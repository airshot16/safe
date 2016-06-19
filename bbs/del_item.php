<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");
//header("Content-Type: text/html; charset=utf-8"); 

if ($admin_flag!="on"){
?>			
<script language="javascript">
	alert("권한이 없습니다.")
	history.back();
</script>
<?
}
$item_check = $_REQUEST["item_check"];
foreach ($item_check as $element) {
		echo $element . '<br/>';
	} 

for($i_item=0; $i_item < sizeof($item_check); $i_item++)
{

/*-----------------------파일 삭제처리 시작----------------------------*/
	
	$sql_file="select filename1 from " .$inc_board_table. " where b_idx=" .$item_check[$i_item];
	$result = mysqli_query($conn, $sql_file);
	$del_file = $result->fetch_array()["filename1"];
	if($del_file==""){
		//do noting
	}	
	else{	
		if(file_exists($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file))) {
			unlink($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file));
		}	
	}	
	
/*----------------------파일 삭제처리 완료----------------------------*/	
	
	$sql="delete from " .$inc_board_table. " where b_idx=" .$item_check[$i_item];
	mysqli_query($conn, $sql);
}
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<SCRIPT LANGUAGE="JavaScript">
<!--
	alert("삭제되었습니다.");
	location.replace("list_board.php");
//-->
</SCRIPT>
