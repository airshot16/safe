<?
include("../inc/dbopen.php");
/*
$sql_sequence="create sequence seq_b_idx_reply increment by 1 start with 1";
echo $sql_sequence."<br>";
*/
$sql_board = "create table ". $inc_board_table;
$sql_board=$sql_board."( 					b_idx					integer NOT NULL,";
$sql_board=$sql_board." 					num					integer NOT NULL,";
$sql_board=$sql_board." 					name					varchar(20),";
$sql_board=$sql_board." 					pwd					varchar(10),";
$sql_board=$sql_board." 					title					varchar(100),";
$sql_board=$sql_board." 					content					text,";
$sql_board=$sql_board." 					writeday				date,";
$sql_board=$sql_board." 					readnum					integer NOT NULL,";
$sql_board=$sql_board." 					ref					integer NOT NULL default 0,";
$sql_board=$sql_board." 					ref_level				integer 	default 0,";
$sql_board=$sql_board." 					ref_step				integer 	default 0,";
$sql_board=$sql_board." 					filename1				varchar(50)	)";
echo $sql_board. "<br>";

$sql_admin = "create table ". $inc_admin_table;
$sql_admin=$sql_admin."( 					admin_idx				integer NOT NULL,";
$sql_admin=$sql_admin." 					admin_id				varchar(15),";
$sql_admin=$sql_admin." 					admin_pw				varchar(15),";
$sql_admin=$sql_admin." 					admin_name				varchar(15)	)";

echo $sql_admin. "<br>";

echo "테이블 생성 스크립트 구문출력";

mysql_query($conn);
mysql_close($conn);

?>
디비관리 참고사항<br>

디비백업<br>
..bin>mysqldump -uroot -p board_reply > backu_board_reply.sql<br>
디비복구<br>
..bin>mysql -uroot -p board_reply < backup_board_reply.sql<br>
