<?
include("./inc/dbopen.php");

$filename = trim($_REQUEST["file_name"]);            //파일이름    
$file = "./upfiles/$filename";        //상대경로    
$file_size = filesize($file);     
$filename = urlencode("$filename");     
    
// 접근경로 확인 (크래킹 방지)  
if (!eregi($_SERVER['HTTP_HOST'], $_SERVER['HTTP_REFERER'])) Error("외부에서는 다운로드 받으실수 없습니다.");     
   
    
if(strstr($HTTP_USER_AGENT, "MSIE 5.5")) {     
  
    header("Content-Type: doesn/matter");     
    header("Content-Length: ".filesize("$file"));     
    header("Content-Disposition: filename=$filename");     
    header("Content-Transfer-Encoding: binary");     
    header("Pragma: no-cache");     
    header("Expires: 0");     
  
} else {     
  
    header("Content-type: file/unknown");     
    header("Content-Disposition: attachment; filename=$filename");     
    header("Content-Transfer-Encoding: binary");     
    header("Content-Length: ".filesize($file));     
    header("Content-Description: PHP3 Generated Data");     
    header("Pragma: no-cache");     
    header("Expires: 0");     
  
}     
    
if( $ret == 1 ) Error("지정하신 파일이 없습니다.");     
if( $ret == 2 ) Error("접근불가능 파일입니다. 정상 접근 하시기 바랍니다.");     
    
if (is_file("$file")) {     
  
    $fp = fopen("$file", "r");     
    if (!fpassthru($fp))     
    fclose($fp);     
  
}     
?> 


