<?php include('./includes/conn.php');?>
<?php 
if(isset($_COOKIE['cookieid'])){
@$rssid=$_GET['rss'];
@$trueid=$_COOKIE['cookieid'];
@$truepassw=$_COOKIE['cookiepw'];
if(@$rssid==$trueid){
	mysql_query("UPDATE user SET rss = '1' WHERE id='$trueid' and password='$truepassw'");
	echo '<script>alert("订阅成功")</script>';
}}
 ?>
<?php include('./includes/title.inc.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('./includes/link.inc.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('./includes/title.inc.php');?>
</head>
<body id="bd">
<?php include('./includes/jiantou.inc.php');?>
<?php include('./includes/header.inc.php');?>
<?php include('./includes/home/home.inc.php');?>
<?php include('./includes/hotpo.inc.php');?>
</div>
<?php include('./includes/footer.inc.php');?>
</body>
</html>
