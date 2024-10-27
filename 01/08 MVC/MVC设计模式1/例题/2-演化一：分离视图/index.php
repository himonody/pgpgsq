<?php
//自动加载类
spl_autoload_register(function($class_name){
	require "./{$class_name}.class.php";
});
//连接数据库
$param=array(
	'user'	=>	'root',
	'pwd'	=>	'root'
);
$mypdo= MyPDO::getInstance($param);
//获取商品数据
$list=$mypdo->fetchAll('select * from products');
require './products_list.html';
