<?php 
  mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die("MySQL连接错误");
  mysql_select_db("app_chai95") or die("DB连接错误");
  mysql_query("set names 'utf8'");
?>