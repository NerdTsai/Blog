<?php
  mysql_connect("localhost","root","") or die("MySQL连接错误");
  mysql_select_db("blog") or die("DB连接错误");
  mysql_query("set names 'utf8'");

 if(isset($_COOKIE["cookieid"])){
	 $cookieid=$_COOKIE["cookieid"];
	 $cookieid=$_COOKIE["cookiepw"];
  $test_pw="select password from user where id='$cookieid'";
  $result_pw=mysql_query($test_pw);
  $exam_pw=mysql_fetch_array($result_pw);
  if($exam_pw[0]==$cookiepw){
  echo "./home.php";
}
}else{
 echo "javascript:login.style.display = 'none';forbid.style.visibility = 'hidden'; void(0);";
}
?>