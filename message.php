<?php include('./includes/conn.php'); ?>
<?php
if(@$_POST['name']&&$_POST['message']) 
{
$name=$_POST['name'];
$content=$_POST['message'];
$arrname=htmlspecialchars($name,ENT_QUOTES);
$arrcon=htmlspecialchars($content,ENT_QUOTES);
$sql="insert into `message`(`id`,`name`,`content`) values (null,'$arrname','$arrcon')";
 mysql_query($sql);

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
<?php include('./includes/link.inc.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('./includes/title.inc.php');?>
</head>
<body id="bd">
<?php include('./includes/jiantou.inc.php');?>
<?php include('./includes/header.inc.php');?>
<?php include('./includes/message/message1.inc.php');?>
<?php include('./includes/message/message2.inc.php');?>
</div>
<?php include('./includes/footer.inc.php');?>
</body>
</html>
