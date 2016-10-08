<?php include('conn.php');?>
<?php $id=$_GET['id']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('diary/includes/link.inc.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="diary/diary.css" />
<?php include('diary/includes/title.inc.php');?>
</head>
<body id="bd">
<?php include('diary/includes/jiantou.inc.php');?>
<?php include('diary/includes/header.inc.php');?>
<div id="md1"></div>
<div id="neirong">
<div id="wenzhang">
<?php @$id=$_GET['id'];
      $res="select * from `diary` where id=$id";
      $query=mysql_query($res);
      $arr=mysql_fetch_array($query);
      $con="<div id=\"diary\">
      <h2>$arr[title]</h2><br>
           <h4>作者:$arr[name] &nbsp;&nbsp;发表于&nbsp;&nbsp; $arr[date]</h4> <br>
           <hr>
           <br>
         <strong><p>&nbsp;&nbsp;&nbsp;&nbsp;$arr[content]</p></strong>
           <br>
           <hr>
      </div>";
echo $con;?>
  </div>
  <div id="md2"></div></div>
<?php include('diary/includes/hotpo.inc.php');?>
</div>
<?php include('diary/includes/footer.inc.php');?>
</body>
</html>