<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");

//header("Content-Type: text/html; charset=utf-8"); 
/*--------------------------------------파일의 처리 시작 ------------------------------------*/
$new_file="";

$name = $_REQUEST["name"];
$pwd  = $_REQUEST["pwd"];
$title = $_REQUEST["title"];
$content = $_REQUEST["content"];
$filename1 = $_FILES['filename1'];

if ($_FILES['filename1']['name']) {
	$file_name=$filename1;

	$file_name_array=strtok($file_name['name'],".");
	$pre_file_name=$file_name_array;
	$body_file_name=strstr($file_name['name'],".");

	$new_file=$file_name['name'];
	$same_file_exist = file_exists($inc_dir_upload . "\\" .$new_file);

	$i=0;
	if($same_file_exist) { //만약 같은 파일이 있다면 1을 증가 시키면서 같은 파일이 없을때 까지 증가 시긴다.//
		while($same_file_exist){
			$i++;
			$file_name_array=strtok($file_name['name'],".");
			$pre_file_name=$file_name_array;
			$body_file_name=strstr($file_name['name'],".");
			$new_file=$pre_file_name."_".$i.$body_file_name;
			$same_file_exist=file_exists("$inc_dir_upload/$new_file");
		}
	}
//파일의 저장 및 임시파일의 삭제//
	print_r($_FILES);
//    if(!@copy($_FILES['filename1']['tmp_name'], $inc_dir_upload . "/" .urlencode($new_file))) { echo("error"); }
    if(!@copy($_FILES['filename1']['tmp_name'], $inc_dir_upload . "/" .iconv("UTF-8", "cp949", $new_file))) { echo("error"); }
}
/*--------------------------------------파일의 처리 종료 ------------------------------------*/

$sql = "Select max(b_idx) as max_b_idx, max(ref) as max_ref, Max(num) as max_num from " .$inc_board_table;
$result = mysqli_query($conn, $sql);
$row=mysqli_num_rows($result);
$rowData = $result->fetch_array();

if($row==0){
	$number=1;
	$max_b_idx=1;
	$ref=1;
}
else{
#	$max_b_idx = mysql_result($result,0,"max_b_idx")+1;
	$max_b_idx = $rowData["max_b_idx"]+1;
#	$max_ref = mysql_result($result,0,"max_ref")+1;
	$max_ref = $rowData["max_ref"]+1;
#	$max_num = mysql_result($result,0,"max_num")+1;
	$max_num = $rowData["max_num"]+1;
}
$name = stripslashes ($name); 
$pwd = stripslashes ($pwd); 
$title = addslashes ($title); 
$content = addslashes ($content); 

$sql_insert = "INSERT INTO " .$inc_board_table;
$sql_insert=$sql_insert . " (b_idx,num,name,pwd,title,content,writeday,ref,readnum,filename1) values ";
$sql_insert=$sql_insert . "(" .$max_b_idx;
$sql_insert=$sql_insert . "," .$max_num;
$sql_insert=$sql_insert . ",'" .$name . "'" ;
$sql_insert=$sql_insert . ",'" .$pwd . "'" ;
$sql_insert=$sql_insert . ",'" .$title . "'"; 
$sql_insert=$sql_insert . ",'" .$content . "'";
$sql_insert=$sql_insert . ",now()";
$sql_insert=$sql_insert . "," .$max_ref;
$sql_insert=$sql_insert . ",0";
$sql_insert=$sql_insert . ",'" .$new_file. "')";
//echo $sql_insert;

mysqli_query($conn, $sql_insert);
mysqli_close($conn);
?>
<script language="javascript">
	location.replace("list_board.php");
</script>
