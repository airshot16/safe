<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");

//header("Content-Type: text/html; charset=utf-8"); 
/*--------------------------------------파일의 처리 시작 ------------------------------------*/

$new_file="";

$b_idx = $_REQUEST["b_idx"];
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
	$same_file_exist = file_exists("$inc_dir_upload/$new_file");

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
	echo $inc_dir_upload . "\\" .urlencode($new_file);
//    if(!@copy($_FILES['filename1']['tmp_name'], $inc_dir_upload . "\\" .urlencode($new_file))) { echo("error"); }
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
	$max_b_idx = $rowData["max_b_idx"]+1;
	$max_ref = $rowData["max_ref"]+1;
	$max_num = $rowData["max_num"]+1;
}

$name = stripslashes ($name); 
$pwd = stripslashes ($pwd); 
$title = addslashes ($title); 
$content = addslashes ($content); 

$sql="select * from " .$inc_board_table." where b_idx=" .$b_idx;
$result = mysqli_query($conn, $sql);
$row=mysqli_num_rows($result);
$rowData = $result->fetch_array();

$ref=$rowData["ref"];
$ref_level=$rowData["ref_level"]+1;
$ref_step=$rowData["ref_step"];


$sql_update="update " .$inc_board_table. " set ref_step=ref_step+1 where ref=" .$ref. " and ref_step >= " .$ref_step;
mysqli_query($conn, $sql_update);

$sql = "INSERT INTO " .$inc_board_table;
$sql=$sql . " (b_idx,num,name,pwd,title,content,writeday,ref,ref_level,ref_step,readnum,filename1) values ";
$sql=$sql . "(" .$max_b_idx;
$sql=$sql . "," .$max_num;
$sql=$sql . ",'" .$name . "'" ;
$sql=$sql . ",'" .$pwd . "'" ;
$sql=$sql . ",'" .$title . "'"; 
$sql=$sql . ",'" .$content . "'";
$sql=$sql . ",now()";
$sql=$sql . "," .$ref;
$sql=$sql . "," .$ref_level;
$sql=$sql . "," .$ref_step;
$sql=$sql . ",0";
$sql=$sql . ",'" .$new_file. "')";
#echo $sql;
mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<script language="javascript">
	location.replace("list_board.php");
</script>


