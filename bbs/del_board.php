<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");
//header("Content-Type: text/html; charset=utf-8"); 

$num = $_REQUEST["num"];

/*-----------------------파일 삭제처리 시작----------------------------*/

$sql_file="select filename1 from " .$inc_board_table. " where num=" .$num;
$result = mysqli_query($conn, $sql_file);
$del_file = $result->fetch_array()["filename1"];
if($del_file==""){
	//do noting
}	
else{	
//	if(file_exists($inc_dir_upload."/".urlencode($del_file))) {
//		unlink($inc_dir_upload."/".urlencode($del_file));
//	}	
		if(file_exists($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file))) {
		echo "delete file..";
		unlink($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file));
	}	
}	

/*----------------------파일 삭제처리 완료----------------------------*/	

$sql="delete from " .$inc_board_table. " where num=" .$num;
mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<script language="javascript">
	location.replace("list_board.php");
</script>

