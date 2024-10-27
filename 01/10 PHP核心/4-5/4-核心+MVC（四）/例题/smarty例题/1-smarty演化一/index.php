<?php
$title='锄禾';
$str=file_get_contents('./index.html');
$str=str_replace('{','<?php echo ',$str);	//替换左大括号
$str=str_replace('}',';?>',$str);			//替换右大括号
file_put_contents('./index.html.php', $str);	//写入混编文件
require './index.html.php';	//包含混编文件
