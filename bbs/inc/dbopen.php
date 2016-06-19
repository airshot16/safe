<?
/*	DB Open	*/
//localhost
$conn=mysqli_connect('localhost','sbmkorea','sbmkoreacom123');
mysqli_select_db($conn, "test");

#$conn=mysqli_connect('mysql.hostinger.kr','u608732346_biz','biz1365');
#mysqli_select_db($conn, "u608732346_biz");

if (!$conn) 
{ 
echo "Error: Could not connect to database. Please try again later."; 
exit; 
} 
$inc_board_table="IP_BOARD_REPLY";

$inc_admin_table="IP_BOARD_ADMIN";
$inc_admin_id="admin_id";

$inc_dir_upload =$_SERVER["DOCUMENT_ROOT"]."/bbs/upfiles"; //현재디렉토리밑의 upload디렉토리 변수

$tran_begin="begin tran ";
$tran_commit=" commit";
$tran_rollback=" rollback";

session_start();


function print_page_text($pg, $tot_pg, $block, $blocksize, $go_url){
	$inc_root_path = "http://localhost";
	
	$page_now="";
	$page_str="";

	$prevPgBlock=$block;
	$nextPgBlock=$block;

	$prevBlock=$block-1;
	$nextBlock=$block+1;

	$prevBlockPg;
	$nextBlockPg;

	$lastblock;
	$page="";
	$split_page_str="|  ";

	$lastblock=Ceil($tot_pg/$blocksize);

	$i_pg=($block-1)*$blocksize+1;
	$i_blocksize = 1;
	do{
		if ($i_pg == $pg) {
			if( $i_pg % $blocksize == 0 ){
				$nextPgBlock = $block + 1;
			}else{
				if( $i_pg % $blocksize == 1 ){
					$prevPgBlock = $block - 1;
				}
			}
			$page_now="<strong><font color=330000>".$i_pg."</font></strong>";
		}else{
			$page_now=" <font color=c0c0c0>".$i_pg."</font> ";
		}

		$split_page_str=$split_page_str."<a href=".$go_url."page=".$i_pg."&block=".$block." class=prg>" .$page_now. "</a>  | ";


		$i_pg++;
		$i_blocksize++;

	}while( !($i_pg > $tot_pg) && !($i_blocksize > $blocksize) );
	$prevBlockPg = $i_pg-$i_blocksize;
	$nextBlockPg = $i_pg;

	if ($pg > $blocksize ) {
		$page_str=$page_str."<a href=".$go_url."page=".$prevBlockPg."&block=".$prevBlock.">[이전10개]</a>";
	}else{
	    $page_str=$page_str."[이전10개]";
	}

	$page_str = $page_str . "&nbsp;&nbsp;";


	if ($pg != 1 ) {
		$page_str=$page_str."<a href=".$go_url."page=".($pg-1)."&block=".$prevPgBlock."><font color=c0c0c0>이전목록 ◀</font></a>";
	}else{
	    $page_str=$page_str."이전목록 ◀  ";
	}

	$page_str = $page_str . "&nbsp;&nbsp;";

	$page_str = $page_str . $split_page_str;

	$page_str = $page_str . "&nbsp;&nbsp;";

	if ($pg != $tot_pg) {
		$page_str=$page_str."<a href=".$go_url."page=".($pg+1)."&block=".$nextPgBlock."><font color=c0c0c0>▶ 다음목록</font></a>";
	}else{
		$page_str=$page_str."▶ 다음목록";
	}

	$page_str = $page_str . "&nbsp;&nbsp;";

	if ($block < $lastblock) {
		$page_str=$page_str."<a href=".$go_url."page=".$nextBlockPg."&block=".$nextBlock.">[다음10개]</a>";
	}else{
		$page_str=$page_str."[다음10개]";
	}

	return $page_str;

}
?>


