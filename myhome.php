<?php include('./includes/title.inc.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('./includes/link.inc.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('./includes/title.inc.php');?>
</head>
<?php 
if(!empty($_POST['logout'])){setcookie("cookieid", "");
setcookie("cookiepw", "");}
?>
<body id="bd">
<?php 
if(!empty($_POST['subchan'])){
  mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die("MySQL连接错误");
  mysql_select_db("app_chai95") or die("DB连接错误");
  mysql_query("set names 'utf8'");
  $truepassw=$_COOKIE['cookiepw'];
	   $trueid=$_COOKIE['cookieid'];
  $newmail=$_POST['newmail'];
  $newdesc=$_POST['newdesc'];
mysql_query("UPDATE user SET email = '$newmail' WHERE id='$trueid' and password='$truepassw'");
mysql_query("UPDATE user SET desc = '$newdesc' WHERE id='$trueid' and password='$truepassw'");}
?>
<?php include('./includes/header.inc.php');?>
   <div style="margin-top:128px;margin-right:10%; margin-left:10%; background-color:white;">
   <?php 
  mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die("MySQL连接错误");
  mysql_select_db("app_chai95") or die("DB连接错误");
  mysql_query("set names 'utf8'");
  
   if(isset($_COOKIE['cookieid'])){
	   $truepassw=$_COOKIE['cookiepw'];
	   $trueid=$_COOKIE['cookieid'];
	   $get_name="select name from user where id='$trueid' and password='$truepassw'"; 
       $result_name=mysql_query($get_name);
       $name=mysql_fetch_array($result_name);
	   $truename=$name['name'];
	   $get_mail="select email from user where id='$trueid' and password='$truepassw'"; 
       $result_mail=mysql_query($get_mail);
       $mail=mysql_fetch_array($result_mail);
	   $get_descs="select descs from user where id='$trueid' and password='$truepassw'"; 
       $result_descs=mysql_query($get_descs);
       $rdescs=mysql_fetch_array($result_descs);
	   $descs=$rdescs['descs'];
	   if(empty($mail['email'])){$email="邮箱为空";}
	   else{
	   $email=$mail['email'];}
	   echo '
<div style="margin-top:150px;margin-left:35%;margin-bottom:45px;">
<div>
<h3>'.$truename.'</h3><h4>同学，欢迎来到你的小窝!</h4>
<br>
<p><strong>ID:</strong>'.$trueid.'</p>
<p><strong>E-mail:</strong>'.$email.'</p>
<p><strong>简介:</strong>'.$descs.'</p>
<form action="myhome.php" method="post" >
<input type="submit" name="logout" value="注销" />
</form>
</div>
<div>
<hr><hr>
<form action="myhome.php" method="post">
<p>E-mail:<input type="text" name="newmail"/></p>
<p>个人说明:<textarea rows="5" cols="50" name="newdesc"></textarea></p>
<p><input type="submit" value="修改" name="subchan"></p>
</form>
</div>
</div>
';
   }else{
	   echo '<h2 align="center">请登入。。。这里是禁区！！！</h2><br><p align="center"><a href="login.php" >传送门biubiubiu...</a></p>';
   }
   ?>
   </div>
</div>
<?php include('./includes/footer.inc.php');?>
</body>
</html>
