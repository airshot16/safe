<?
include("./inc/dbopen.php");
include("./inc/stylesheet.php");

$num = $_REQUEST["num"];

$sql="select * from " .$inc_board_table." where num=" .$num;
$result = mysqli_query($conn, $sql);
$row=mysqli_num_rows($result);
$rowData = $result->fetch_array();
?>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<TABLE WIDTH ="100%" border=0>
	<TR>
		<TD>
				 <TABLE BORDER='0' CELLPADDING=2 CELLSPACING='1' WIDTH="500">    
<FORM METHOD="post" NAME="edit_form" action="edit_board_ok.php">          
<INPUT TYPE="hidden" NAME="num" VALUE="<?echo $num?>">
<!-- 글쓴이시작 -->
					<TR> 
						<TD ALIGN=left VALIGN=middle>
							<table width="100" cellpadding="0" cellspacing="1" border="0" bgcolor="#4aaa00">
								<tr>
									<td> 
										<table width="100%" cellpadding="2" cellspacing="0" border="0">
											<tr>
												<td  bgcolor="#C6DB9C">
													 <FONT COLOR='#000000'><div align="center" >글쓴이</div></FONT>    
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>

						</TD>
				        <TD ALIGN=left VALIGN=middle>
						      <INPUT TYPE=text NAME="name" SIZE='10' MAXLENGTH=10	VALUE="<?echo $rowData["name"]?>">          
						</TD>
					</TR>
   <!-- 글쓴이끝 -->
<!-- 비밀번호시작 -->
					<TR> 
						<TD ALIGN=left VALIGN=middle>
							<table width="100" cellpadding="0" cellspacing="1" border="0" bgcolor="#4aaa00">
								<tr>
									<td> 
										<table width="100%" cellpadding="2" cellspacing="0" border="0">
											<tr>
												<td  bgcolor="#C6DB9C">
													 <FONT COLOR='#000000'><div align="center" >비밀번호</div></FONT>    
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>

						</TD>
				        <TD ALIGN=left VALIGN=middle>
						      <INPUT TYPE=text NAME="pwd" SIZE='10' MAXLENGTH=10	VALUE="<?echo $rowData["pwd"]?>">          
						</TD>
					</TR>
   <!-- 비밀번호끝 -->
<!-- 제목시작 -->
					<TR> 
						<TD ALIGN=left VALIGN=middle>
							<table width="100" cellpadding="0" cellspacing="1" border="0" bgcolor="#4aaa00">
								<tr>
									<td> 
										<table width="100%" cellpadding="2" cellspacing="0" border="0">
											<tr>
												<td  bgcolor="#C6DB9C">
													 <FONT COLOR='#000000'><div align="center" >제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</div></FONT>    
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>

						</TD>
				        <TD ALIGN=left VALIGN=middle>
						      <INPUT TYPE=text NAME="title" SIZE='54' MAXLENGTH=40	VALUE="<?echo $rowData["title"]?>">          
						</TD>
					</TR>
   <!-- 제목끝 -->
  <!-- 내용시작 -->
				   <TR> 
						<TD ALIGN=left VALIGN=top>
						    <table width="100" cellpadding="0" cellspacing="1" border="0" bgcolor="#4aaa00">
								<tr>
									<td> 
										<table width="100%" cellpadding="2" cellspacing="0" border="0">
											<tr>
												<td  bgcolor="#C6DB9C">
												<FONT COLOR='#000000'><div align="center" >
												내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용</div></FONT>    
												</td>
											</tr>
										</table>
									</td>	
								</tr>
							</table>	
						</TD>
				   </tr>
				   <tr>
						<TD colspan="2" ALIGN=left VALIGN=top>
							  <TEXTAREA NAME="content" ROWS=7 COLS="70"><?echo $rowData["content"]?></TEXTAREA>
						</TD>
				   </TR>
					<TR>
						<TD colspan="2" VALIGN=middle >
						<INPUT TYPE=button NAME=regBtn VALUE="        저장하기        "
						onClick="javascript:sendit();"
						style="background-color:''; border:dashed 2px ; border-color: ''; font-color : 'ffffff'; height:24px" >
						<INPUT TYPE=button NAME=regBtn VALUE="        취소        "
						onClick="javascript:location.href='list.php';"
						style="background-color:''; border:dashed 2px ; border-color: ''; font-color : 'ffffff'; height:24px" >
						</TD>
					</TR>	
	<!--내용 끝-->
</FORM>
			</TABLE>
<!-- 글쓰기 테이블 끝 -->
		</TD>
	</TR>
</TABLE>

<!-- 테두리 테이블 끝 -->


<script language="javascript">
<!--
var f=document.edit_form;

function sendit() 
{
		//글 내용
    if (f.title.value == "" ) {
                alert("주제를 작성하시기 바랍니다.");
  					    f.title.focus();
                return;
        } 
		if (f.content.value == "") {
                alert("공지사항 내용을 입력하시기 바랍니다.");
  				      f.content.focus();
                return;
        }

		f.submit();
        
}
//-->
</script>

<?
mysqli_close($conn);
?>


