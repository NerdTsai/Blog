<?php include('conn.php') ;?>
<?php
if(@$_POST['name']&&$_POST['content']&&$_POST['title']) 
{
$title=$_POST['title'];
$name=$_POST['name'];
$content=$_POST['content'];
$sql="insert into `diary`(`id`,`title`,`date`,`name`,`content`) values (null,'$title',now(),'$name','$content')";
mysql_query($sql);
$rssmail="select email from user where rss='1'";
$result_rm=mysql_query($rssmail);
if(!empty($result_rm)){
	$array_rm=mysql_fetch_array($result_rm);
	$sub="PI Blog----".$title;
	$mess="又有新文章喽！！欢迎访问PI站，http://3.1415926.xyz";
	print_r($array_rm);
	foreach($array_rm as $value){
		mail($value,$sub,$mess);
	}
}

}
else{
  if (@$_POST['sub']) {
  echo '<script>alert("输入框为空！")</script>';
  }
 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body bgcolor="black">
	<h1 align="center"><font color="white"><strong>日志编辑器</strong></font></h1>
<div align="center">
<form action="adminedit.php" method="post">
<font color="white"><strong>标题</strong></font><input type="text" name="title" />
     <br><br>
<font color="white">作者</font><input type="text" name="name" />
     <br><br> <input type="submit" value="提交" name="sub" /><br>
<textarea type="text" name="content" rows="25" cols="50"></textarea>


</form>

</div>
</body>
</html>
