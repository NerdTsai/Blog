<?php include('conn.php'); ?>
<div id="md1"></div>
<div id="neirong">
<div id="wenzhang">
<h2>&nbsp;留言板</h2>
<?php 
$res="select * from `message`order by id desc limit 15";
 $query=mysql_query($res);
while($arr=mysql_fetch_array($query)){
 $con="<div><h4><strong>$arr[name] 同学说:</strong></h4><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[content]<br></div><hr>\n";
 echo $con;
}
 ?>
<div id="md2"></div>
</div>
</div>