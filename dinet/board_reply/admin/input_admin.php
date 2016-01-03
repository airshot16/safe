<?
include("../inc/dbopen.php");
include("../inc/stylesheet.php");
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<TABLE>
<TR>
	<TD colspan=4 bgcolor="fff333" align=center>관리자리스트</TD>
</TR>
<TR>
	<TD>관리자아이디</TD>
	<TD>관리자비밀번호</TD>
	<TD>관리자이름</TD>
</TR>
<?
$sql_admin="select * from " .$inc_admin_table;
$result_admin = mysqli_query($conn, $sql_admin);
$row_admin=mysqli_num_rows($result_admin);

for($i_rec=0;	$i_rec < $row_admin ; $i_rec++)
{
#	$row_seek =	mysqli_data_seek($result_admin,$i_rec);
  $row_seek=mysqli_fetch_array($result_admin);
?>
<TR>
	<TD><?echo $row_seek["admin_id"];?></TD>
	<TD><?echo $row_seek["admin_pw"];?></TD>
	<TD><?echo $row_seek["admin_name"];?></TD>
</TR>
<?
}
?>
<FORM METHOD=POST ACTION="input_admin_ok.php">

<TR>
	<TD colspan=3 bgcolor="fff333" align=center>관리자추가</TD>
</TR>
<TR>
	<TD>관리자 아이디</TD>
	<TD><INPUT TYPE="text" NAME="admin_id"></TD>
</TR>
<TR>
	<TD>관리자 비밀번호</TD>
	<TD><INPUT TYPE="password" NAME="admin_pw"></TD>
</TR>
<TR>
	<TD>관리자이름</TD>
	<TD><INPUT TYPE="text" NAME="admin_name"></TD>
</TR>
<TR>
	<TD><INPUT TYPE="button" value="추가" onclick="javascript:return verify(this);"></TD>
	<TD><INPUT TYPE="reset"></TD>
</TR>
</FORM>
</TABLE>

<SCRIPT LANGUAGE="JavaScript">
<!--
var f=document.forms[0];

function verify(form){

 count=0
 if( f.admin_id.value != "") { 
   count = count + 1;
  }
 if(count == 0 ) {
  alert("관리자아이디를 입력하시기 바랍니다.");
        f.admin_id.focus();
        return;
       }

 count=0
 if( f.admin_pw.value != "") { 
   count = count + 1;
  }
 if(count == 0 ) {
  alert("관리자비밀번호를 입력하시기 바랍니다.");
        f.admin_pw.focus();
        return;
       }

 count=0
 if( f.admin_name.value != "") { 
   count = count + 1;
  }
 if(count == 0 ) {
  alert("관리자이름을 입력하시기 바랍니다.");
        f.admin_name.focus();
        return;
       }

  f.submit();
}	
//-->
</SCRIPT>

