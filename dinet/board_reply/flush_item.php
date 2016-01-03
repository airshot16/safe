<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");
header("Content-Type: text/html; charset=utf-8"); 

if ($admin_flag!="on"){
?>			
<script language="javascript">
	alert("권한이 없습니다.")
	history.back();
</script>
<?
}
$flush_splits = $_REQUEST["flush_splits"];

$flush_split=explode('*',$flush_splits); 
$flush_len=count($flush_split)-1;

for($i_item=0; $i_item < $flush_len; $i_item++)
{

/*-----------------------파일 삭제처리 시작----------------------------*/
	
	$sql_file="select filename1 from " .$inc_board_table. " where b_idx=" .$flush_split[$i_item];
	$result = mysql_query($sql_file,$conn);
	$del_file=mysql_result($result,0,0);
	if($del_file==""){
		//do noting
	}	
	else{	
		if(file_exists($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file))) {
			unlink($inc_dir_upload."/".iconv("UTF-8", "cp949", $del_file));
		}	
	}	
	
/*----------------------파일 삭제처리 완료----------------------------*/	
	
	$sql="delete from " .$inc_board_table. " where b_idx=" .$flush_split[$i_item];
	mysql_query($sql);
}
?>
<SCRIPT LANGUAGE="JavaScript">
<!--
	alert("삭제되었습니다.");
	location.replace("list_board.php");
//-->
</SCRIPT>
