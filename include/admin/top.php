<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>sl inc</title>
	
	<link rel="stylesheet" href="/lib/jquery.treeview/jquery.treeview.css" />
	<link rel="stylesheet" href="/lib/jquery.treeview/screen.css" />
	
 	<script src="/lib/jquery.jqGrid-4.6.0/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="/lib/jquery.cookie.js" type="text/javascript"></script>
	<script src="/lib/jquery.treeview/jquery.treeview.js" type="text/javascript"></script>
	<script src="/lib/js/jquery.ui.shake.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#menu").treeview({
			toggle: function() {
				console.log("%s was toggled.", $(this).find(">span").text());
			}
		});
	});
	</script>
	
</head>
	
<h1 id="banner"><a href="/index.php/admin/main">safeleader inc</a> </h1>
<div id=loginDiv style="display:">
<?php
if(empty($_SESSION['ss_user']['uid']))
{
?>
<h1><a href="/index.php/admin/main">Login</a></h1>
<?php
}else{
?>
<h1><a href="/index.php/admin/main"><?php echo $_SESSION['ss_user']['uid']?></a>님&nbsp;<a href="/index.php/common/user/logout"><img src="/images/common/btn_gnb_logout.gif"></a></h1>
<?php
}
?>
</div>

<div id=logoutDiv style="display:none">
<h1>tester님 <img src="/images/common/btn_gnb_logout.gif"></h1>
</div>
