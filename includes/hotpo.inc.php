<div id="newslan">
<h2>&nbsp;热点资讯</h2>
<?php
   $rule_hotpo='/title=\"(.*?)\" href=\"(.*?)\".*?363/';
   $url='http://www.csdn.net';
   $furl=fopen($url,'r');
   $content=stream_get_contents($furl,1024*1024);
   $result_hotpo=preg_match_all($rule_hotpo,$content,$match_hotpo);
   $hotpo1=$match_hotpo[1];
   $hotpo2=$match_hotpo[2];
   echo '<ul class="list-unstyled">';
   foreach($hotpo1 as $key =>$value){
	   echo '<li><a title="'.$value.'" href="'.$hotpo2[$key].'" target="_blank">'.$value.'</li><hr>';
   }
   echo "</ul>";
?>
</div>