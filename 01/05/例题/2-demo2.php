<?php
//post数组中不为空
if(!empty($_POST)) {
	echo '这是post提交的数据<br>';
	echo '语文：'.$_POST['ch'],'<br>';
	echo '数学：'.$_POST['math'],'<br>';
}
echo '<hr>';
//获取get提交的数据
if(!empty($_GET)){
	echo '这是get提交的数据<br>';
	echo '语文：'.$_GET['ch'],'<br>';
	echo '数学：'.$_GET['math'],'<br>';
}
echo '<hr>';
//既能获取get又能获取post提交的数据
echo $_REQUEST['ch'],'<br>';
echo $_REQUEST['math'];