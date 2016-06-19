<?
function jsspecialchars( $string = '') {
     $string = preg_replace("/\r*\n/","\\n",$string);
     $string = preg_replace("/\//","\\\/",$string);
     $string = preg_replace("/\"/","\\\"",$string);
     $string = preg_replace("/'/"," ",$string);
     return $string;
 }
?>
<?
include("./inc/dbopen.php");
include("./inc/stylesheet.php");

$num = $_REQUEST["num"];

$sql_cnt="select count(*) as cnt from " .$inc_board_table;
$result_cnt = mysqli_query($conn, $sql_cnt);
$reccnt=$result_cnt->fetch_array()["cnt"];

$sql="select * from " .$inc_board_table." where num=" .$num;
$result = mysqli_query($conn, $sql);
$rowData = $result->fetch_array();

$pagesize=10;
#$b_idx=mysql_result($result,0,"b_idx");
$b_idx=$rowData["b_idx"];
#$content=mysql_result($result,0,"content");
$content=$rowData["content"];
$content=str_replace("\n","<br>",$content);

//이전글과 다음글 연결
$sql="select * from " .$inc_board_table. " order by num asc";
$result_board = mysqli_query($conn, $sql);
$rows=mysqli_num_rows($result_board);

//$prev_num=0;
//$next_num=0;

for($i_recnum=0; ($i_recnum < $reccnt) && ($i_recnum < $rows); $i_recnum++)
{
	$listData=mysqli_fetch_array($result_board);
	if (intval($listData["num"]) < intval($num)){
		$prev_num=$listData["num"];
	}
	elseif (intval($listData["num"]) == intval($num)){
		$recnum=$i_recnum;
	}
	elseif (intval($listData["num"]) > intval($num)){
		$next_num=$listData["num"];
		break;
	}
}

?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
                
<!--게시판 읽기-->  
<table width="600" border="1" cellspacing="0" cellpadding="2" bordercolor="white" bordercolorlight="#999999">
	<TR bgcolor="#EEEEEE"> 
		<TD ALIGN='Center' VALIGN=middle width="13%" bgcolor="#7f7f7f" ><font color= "#ffffff"><b>&nbsp;글쓴이</b></font> </TD>
		<TD ALIGN='Center' VALIGN=middle bgcolor="#EEEEEE" width="25%" ><?echo $rowData["name"]?></A></TD>
		<TD ALIGN='Center' VALIGN=middle width ="13%" bgcolor="#7f7f7f"><font  color="#FFFFFF"><b>&nbsp;번호</b></font></TD>
		<TD ALIGN='Center' VALIGN=middle  bgcolor="#EEEEEE" width="30%" >&nbsp;&nbsp;<?echo $rowData["num"]?></TD>
	</TR>
	<TR bgcolor="#EEEEEE"> 
		<TD ALIGN='Center' VALIGN=middle  bgcolor="#7f7f7f" ><font color="#FFFFFF" ><b>&nbsp;&nbsp;작성일</b></font> </TD>
		<TD ALIGN='Center' VALIGN=middle bgcolor="#EEEEEE"  >&nbsp;&nbsp;<?echo $rowData["writeday"]?></TD>	
		<TD ALIGN='Center' VALIGN=middle  bgcolor="#7f7f7f" ><font color="#FFFFFF" ><b>&nbsp;&nbsp;화일이름</b></font> </TD>
		<TD ALIGN='Center' VALIGN=middle bgcolor="#EEEEEE"  >&nbsp;&nbsp;<a href="down.php?fileName=<?echo $rowData["filename1"]?>"><?echo $rowData["filename1"]?></a></TD>	
		</TD>
	</TR>  
</table>
				
<!-- 내용 테이블 시작 -->
<table width="600" border="0" cellspacing="0" cellpadding="0">    
<TR>
	<td colspan="3" valign="top"><img src="./images/r1.gif" valign="top" border="0"></td>
	</tr>
	<tr>
		<td width="1" bgcolor="9C9A9C"></td>
		<td width="598">
			<table width="590" cellspacing="0" border="0" cellpadding="2">
			<tr>
				<TD ALIGN=center  VALIGN=middle HEIGHT=20 colspan="4" > 
					<FONT  COLOR='#000000'><B><?echo $rowData["title"]?></B></FONT></TD>
			</tr>
			<tr>
				<TD><img src="./images/line.gif"></TD>
			</tr>
			<tr>
				<TD ALIGN="Left" VALIGN=top BGCOLOR='#ffffff'  HEIGHT="10" COLSPAN = "4" ><?echo $content?></TD>
			</tr>
			</table>
		</td>
		<td width="1" bgcolor="9C9A9C"></TD>
	</TR>
	<TR> 
		<td colspan="3"><img src="./images/r2.gif"></td>
	</tr>
</TABLE>

<!-- 내용 테이블 끝 -->
<BR>


<!-- 아래 메뉴 -->
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=600>				
<TR>
	<TD VALIGN=middle ALIGN=right>		
		<A HREF="./admin/login_form.php?num=<?echo $num?>&cmd=edit" onMouseOver="window.status='Modify this message'; return true;" OnMouseOut="window.status=''; return true;"><IMG SRC="./images/i_modify.gif" BORDER=0 ALT="Modify"></A>
		<A HREF="./admin/login_form.php?num=<?echo $num?>&cmd=del"	onMouseOver="window.status='Delete this message'; return true;" onMouseOut="window.status=''; return true;"><IMG SRC="./images/i_delete.gif" BORDER=0 ALT="Delete"></A>
		<A HREF="./input_board.php" onMouseOver="window.status='Write a new message'; return true;" onMouseOut="window.status=''; return true;">	<IMG SRC="./images/i_write.gif" BORDER=0 ALT='Write'></A>			
		<A HREF="./input_reply.php?b_idx=<?echo $b_idx?>&num=<?echo $num?>" onMouseOver="window.status='Write a reply message'; return true;" onMouseOut="window.status=''; return true;">	<IMG SRC="./images/i_reply.gif" BORDER=0 ALT='Write'></A>			
		<A HREF="list_board.php"	 onMouseOver="window.status='Back to the list page'; return true;"	onMouseOut="window.status=''; return true;"><IMG SRC="./images/i_list.gif" BORDER=0 ALT='List'></A>


<?if (isset($prev_num)){	?>
		<a href="content.php?num=<?echo $prev_num?>"><img src="./images/i_back.gif" border="0"></a>
<?	}
else{	?>
		<img src="./images/i_back.gif" border="0">
<?	}	?>

<? if (isset($next_num)){	?>
		<a href="content.php?num=<?echo $next_num?>"><img src="./images/i_next.gif" border="0"></a>
<?	}
else{	?>
		<img src="./images/i_next.gif" border="0">
<?	}	?>

	</TD>
</TR>
</TABLE>
<?
$readnum=intval($rowData["readnum"])+1;
$sql="update " .$inc_board_table. " set readnum = " .$readnum. " where num=" .$num;
mysqli_query($conn, $sql);
mysqli_close($conn);
?>


	</td>
</tr>
</table>

        

