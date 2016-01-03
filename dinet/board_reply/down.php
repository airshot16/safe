<?
//header("Content-Type: text/html; charset=utf-8"); 
 
$fileName = $_REQUEST["fileName"];
 
$filepath = "./upfiles/" .iconv("UTF-8", "cp949", $fileName);

 
if(!file_exists($filepath))

{

 die($fileName.' 파일 없음');

}



$extension = explode('.', $fileName);

$extension = $extension[1];

 

switch($extension) 

{

  case "pdf": $type="application/pdf"; break;

  case "exe": $type="application/octet-stream"; break;

  case "zip": $type="application/zip"; break;

  case "doc": $type="application/msword"; break;

  case "xls": $type="application/vnd.ms-excel"; break;

  case "ppt": $type="application/vnd.ms-powerpoint"; break;

  case "gif": $type="image/gif"; break;

  case "png": $type="image/png"; break;

  case "jpeg":

  case "jpg": $type="image/jpg"; break;

  case "mp3": $type="audio/mpeg"; break;

  case "wav": $type="audio/x-wav"; break;

  case "mpeg":

  case "mpg":

  case "mpe": $type="video/mpeg"; break;

  case "mov": $type="video/quicktime"; break;

  case "avi": $type="video/x-msvideo"; break;

  case "txt": $type="text/plain"; break;

 

  case "asp":

  case "aspx":

  case "jsp":

  case "js":

  case "css":

  case "php":

  case "htm":

  case "html":  

   die("다운로드 불가");

  break;

 

  default: $type="application/force-download";

}

 

header("Pragma: public");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Cache-Control: public"); 

header("Content-Description: File Transfer");

 

header("Content-Type: ".$type);

 

//header("Content-Disposition: attachment; filename=".basename($filepath).";");
header("Content-Disposition: attachment; filename=".iconv("UTF-8", "cp949", $fileName).";");

header("Content-Transfer-Encoding: binary");

header("Content-Length: ".@filesize($filepath));

@readfile($filepath);

?>
