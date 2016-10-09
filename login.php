<?php 
  mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die("MySQL连接错误");
  mysql_select_db("app_chai95") or die("DB连接错误");
  mysql_query("set names 'utf8'");
  if(!empty($_POST['submit'])){
$user=$_POST['name'];
$password=$_POST['password'];
$md5_password=md5($password);
$get_id="select id from user where name='$user' and password='$md5_password' limit 1"; 
$result_id=mysql_query($get_id);
$uid=mysql_fetch_array($result_id);
if($uid['id']){
	setcookie("cookieid",$uid['id']);
	setcookie("cookiepw",$md5_password);
		echo '<script>alert("登入成功")</script>';
		echo '<script language="javascript">window.history.back(-1);</script> ';
}else echo '<script>alert("用户名或密码错误")</script>';
  }
?>
<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('./includes/link.inc.php');?>
<?php include('./includes/title.inc.php');?>
</head>
<body id="bd">
<?php include('./includes/jiantou.inc.php');?>
<?php include('./includes/header.inc.php');?>
<div style="margin-top:150px;margin-left:35%;">
<form action="login.php" method="post">
<div >
<lable>用户名：</lable><input type="text" size="20" name="name"/><br /><br />
<lable>密&nbsp;&nbsp;&nbsp;&nbsp;码：</lable><input type="password" size="20" name="password"/><br /><br />
<input type="submit" value="登入" name="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://3.1415926.xyz/blog v 1.3.2/register/index.php">注册</a>
</div>
</form>
<br />

<br />
</div>
</div>
<?php include('./includes/footer.inc.php');?>
</body>
</html>


