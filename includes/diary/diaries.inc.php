<?php include('conn.php') ;?>
<?php @$res="select * from `diary`order by id desc limit 20";
$query=mysql_query($res);
while($arr=mysql_fetch_array($query)){
$con="
<div><a href=\"./includes/content.php?id=$arr[id]\">
<h3>$arr[title]</h3><br>
           <h4>作者:$arr[name] &nbsp;&nbsp;发表于 &nbsp;&nbsp; $arr[date]</h4> <br>
           <hr></a>
           </div>";

 echo $con;
  }
?>