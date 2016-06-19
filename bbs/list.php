<?
include("./inc/dbopen.php");
include("./inc/admin_check.php");
include("./inc/stylesheet.php");

$method = "";
$KEYWORD = "";
if(isset($_REQUEST["method"])){
	$method = $_REQUEST["method"];
}
if(isset($_REQUEST["KEYWORD"])){
	$KEYWORD = $_REQUEST["KEYWORD"];
}

/*''''''''''''''''''''''''''''''''''검색옵션'''''''''''''''''''''''''''*/
$sql_search="";
if (isset($method))
{
	switch ($method)
	{
	  case "all":
	    $sql_search=$sql_search." where name like '%".$KEYWORD."%' or title like '%".$KEYWORD."%' or content like '%".$KEYWORD."%'";
	    break;
	  case "writer":
	    $s_writer=" selected";
	    $sql_search=$sql_search." where name like '%".$KEYWORD."%'";
	    break;
	  case "subject":
  	  $s_subject=" selected";
	    $sql_search=$sql_search." where title like '%".$KEYWORD."%'";
	    break;
	  case "content":
	    $s_content=" selected";
	    $sql_search=$sql_search." where content like '%".$KEYWORD."%'";
	    break;
	}
}	
/*'''''''페이지 처리'''''''''''''''''''''''''''''''''''''''''''''''''''''*/

$pagesize=10;
$sql_cnt="select count(*) as cnt from ".$inc_board_table.$sql_search;
$result_cnt=mysqli_query($conn, $sql_cnt);
$reccnt=$result_cnt->fetch_array()["cnt"];
$pagecnt=intval(($reccnt-1)/$pagesize+1);

$sql="select DATE_FORMAT(a.writeday, '%Y-%m-%d') txt_writeday, a.* from ".$inc_board_table. " a " .$sql_search." order by ref desc, ref_step desc, ref_level desc, num desc";
$result = mysqli_query($conn, $sql);
$row=mysqli_num_rows($result);

if($row==0){
	$tot_page=1;
}else{
	$tot_page = $pagecnt;
}

if(isset($_REQUEST["page"])){
	$page = $_REQUEST["page"];
	$i_rec_start=($page-1)*$pagesize;
}else{
	$page=1;
	$i_rec_start=0;
}

/*'''''''블락처리'''''''''''''''''''''''''''''*/

$blocksize=10;
if(isset($_REQUEST["block"])){
	$block = $_REQUEST["block"];
}else{
	$block=1;
}
?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<!--게시판-->  
<form action="list.php" method="post" name="listForm">
<table border=0 cellpadding=0 cellspacing=1 width="600">
<tr>
	<td colspan=6>
			<TABLE BORDER='0' CELLPADDING=2 CELLSPACING='0' WIDTH="100%">
			<TR>
<?if($admin_flag=="on"){?>			
				<TD BGCOLOR='#DFDFDF'>선택</TD>
<?	}	?>		
<!-- 		
				<TD ALIGN=center BGCOLOR='#DFDFDF'  WIDTH='60'>순번</TD>
				<TD ALIGN=center BGCOLOR='#DFDFDF'  WIDTH='53'>번호</TD>
-->				
<TD ALIGN=center BGCOLOR='#DFDFDF'  WIDTH='379'>제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</TD>
				<TD ALIGN=center BGCOLOR='#DFDFDF'  WIDTH='75'>성명</TD>
				<TD ALIGN=center BGCOLOR='#DFDFDF'  WIDTH='80'>작성일</TD>		
			</TR>
			</table>
	</td>
</tr>
<?
for($i_rec=0; $i_rec < $pagesize ; $i_rec++)
{
	if(($i_rec >= $pagesize) || ($i_rec_start+$i_rec >= $row)){
		break;
	}
    $recnum=($reccnt+1)-(($page-1)*$pagesize+$i_rec+1);
  
#	$row_seek = mysqli_data_seek($result,$i_rec_start+$i_rec);
    $row_seek=mysqli_fetch_array($result);
?>
<tr>
	<td colspan="6" align="center"><img src="./images/line.gif" width="100%" height="1" border="0"></td>
</tr>

<tr <?	if($i_rec%2==1){	?>bgcolor="#E7EDF8"<?	}else{	?>bgcolor="#ffffff"<?	}	?>> 
	<td colspan=6>
			<TABLE BORDER='0' CELLPADDING=2 CELLSPACING='0' WIDTH="100%">
			<TR>
<?if($admin_flag=="on"){?>			
		   <TD>
		   	   <input type=checkbox name="item_check[]" value="<?echo $row_seek["b_idx"]?>">
		   </TD>
<?	}	?>		   
<!-- 		
			<td align="center" WIDTH='60' height="20"><?echo $recnum?></td>
	   	   <td align="center" WIDTH='53'><?echo $row_seek["num"]?></td>
-->				
		   <td WIDTH='379' align="left"><a href="content.php?num=<?echo $row_seek["num"]?>&recnum=<?echo $recnum?>"><?echo $row_seek["title"]?></a></td>
		   <td align="center" WIDTH='75'><?echo $row_seek["name"]?></td>
		   <td align="center" WIDTH='80'><?echo $row_seek["txt_writeday"]?></td>
			</TR>
			</table>
	</td>
</tr>
<?
}
?>
<?
for(; $i_rec < $pagesize ; $i_rec++)
{
?>
<tr>
	<td colspan="6" align="center"><img src="./images/line.gif" width="100%" height="1" border="0"></td>
</tr>
<tr <?	if($i_rec%2==1){	?>bgcolor="#E7EDF8"<?	}else{	?>bgcolor="#ffffff"<?	}	?>> 
	<td colspan=6>
			<TABLE BORDER='0' CELLPADDING=2 CELLSPACING='0' WIDTH="100%">
			<TR>
		   <td align="center" WIDTH='60' height="20"></td>
		   <td WIDTH='279'></td>
		   <td align="center" WIDTH='75'></td>
		   <td align="center" WIDTH='80'></td>
		   <td align="center" WIDTH='53'></td>
			</TR>
			</table>
	</td>
</tr>
<?
}
?>

<tr bgcolor="#ffffff"> 
	<td colspan=6>
			<TABLE BORDER='0' CELLPADDING=2 CELLSPACING='0' WIDTH="100%">
			<TR>
<?if($admin_flag=="on"){?>			
				<td><input type=button value="선택삭제" onclick="javascript:flush_item();"></td>
<?	}	?>		   
				<td colspan="4" height="25" align="center">
					<select name="method">
						<option value="all" >전체
						<option value="writer" <?if($method=="writer"){?>selected<?}?>>글쓴이
						<option value="subject" <?if($method=="subject"){?>selected<?}?>>제목
						<option value="content" <?if($method=="content"){?>selected<?}?>>본문
					</select>
			    <input type="text" name="KEYWORD" value="<?echo $KEYWORD?>" size="12">
			    <input type=button value="검색" onclick="javascript:document.forms[0].submit();">
				</td>
				<TD VALIGN=middle ALIGN=right>		
					<A HREF="./input_board.php" onMouseOver="window.status='Write a new message'; return true;" onMouseOut="window.status=''; return true;">	<IMG SRC="./images/i_write.gif" BORDER=0 ALT='Write'></A>			
				</TD>
			</TR>
			</table>
	</td>
</tr>
<tr bgcolor="#336699">
	<td colspan="15" height="30" class="white" align="center">
	<?echo print_page_text($page, $tot_page, $block, 10, "list.php?method=$method&KEYWORD=$KEYWORD&")?>
	</td>
</tr>

<!--flush parameter-->
<input type="hidden" name="flush_splits">

 </form>
              
</table>      

<SCRIPT LANGUAGE="JavaScript">
<!--

function flush_item()
{
	var f=document.listForm;
	var chk = document.listForm['item_check[]'];
	var cnt_rec=parseInt("<?echo $i_rec;?>");

	var isChecked="false";
	var flush_splits="";
	if (chk.length)
	{
		for(var i=0; i<chk.length; i++){
			if(chk[i].checked){
				isChecked="true";
			}
		}
	}else{
		if(chk.checked){
			isChecked="true";
		}
	}
	if (isChecked=="false")
	{
		alert("항목을 선택하시기 바랍니다.");
	}
	else
	{
		f.action="del_item.php";
		f.submit();

	}
	return;
	f.action="del_item.php";
	f.submit();
}

//-->
</SCRIPT>
<?          
		mysqli_close($conn);
?>		

