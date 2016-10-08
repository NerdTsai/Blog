
<div id="head"><a href="index.php" class="title">&nbsp;&nbsp;MY'S Blog</a>
<div id="user">
<a href="http://127.0.0.1/blog%20v%201.3.0/index.php?rss=<?php if(isset($_COOKIE['cookieid'])){
	           $trueid=$_COOKIE['cookieid'];
			   echo $trueid;
		   }else{echo "0";} ?>" ><i class="glyphicon glyphicon-star"></i></a>
<a href="<?php 
           if(isset($_COOKIE['cookieid'])){
			   echo "http://3.1415926.xyz/blog%20v%201.3.0/myhome.php";
		   }else{echo "http://3.1415926/blog%20v%201.3.0/login.php";}
		   ?>" ><i class="glyphicon glyphicon-user"></i></a>
</div>
</div>

<div class="dhl">
<ul class="nav nav-pills">
<li><a href="../index.php"><i class="glyphicon glyphicon-home"></i>&nbsp;首页&nbsp;</a></li>
<li><a href="../diary.php"><i class="glyphicon glyphicon-list"></i>&nbsp;日志&nbsp;</a></li>
<li><a href="../message.php"><i class="glyphicon glyphicon-comment"></i>&nbsp;留言板&nbsp;</a></li>
<li id="sousuo"> 
<form class="navbar-search" float="right" target="_blank" method="get" action="http://www.baidu.com/s">
<input name="word" type="text" class="search-query" placeholder="请输入..."/>
<button  type="submit" class="btn">Search</button>
</form></li>
</ul>
</div>

