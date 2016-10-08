<?php $title=basename($_SERVER['SCRIPT_FILENAME'],'.php');
$title=str_replace('_','', $title);
if($title=='index'){
	$title='首页';
}elseif($title=='message'){
		$title='留言板';
	}elseif($title=='diary'){
			$title='日志';
		} 
?>
<title>New Blog <?php echo "&#8212;{$title}";?></title>