<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>注册</title>
</head>
<div style="margin-top:150px;margin-left:35%;">
<form action="index.php" method="post">
<p>用户名<input type="text" name="name"/>
<p>邮箱<input type="text" name="mail"/>
<p>密码<input type="password" name="password"/>
<p><input type="submit" value="注册" name="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">返回首页</a>
</form>
<br />

<br />
</div>
</div>
<?php 
include('conn.php');
@$name=$_POST['name'];
@$password=$_POST['password'];
@$mail=$_POST['mail'];
@$pw=md5($password);
if($password&&$name&&$mail){
 $sql="SELECT name FROM user Where name='$name'";                                                                                                                                                
 $result = mysql_query($sql);
 @$rows = mysql_num_rows($result);
 if($rows>0){
echo '<script>alert("用户名重复")</script>';
}else{
$level=0;
$result="insert into `user` (`id`,`name`,`password`,`level`,`email`,`rss`,`descs`) values(null,'$name','$pw','$level','$mail','0','简介为空')";
mysql_query($result);
echo '<h2>恭喜！注册成功</h2>';
}
}
?>

</body>
</html>