<?php
//自动加载类
spl_autoload_register(function($class_name){
	require "./{$class_name}.class.php";
});
//实例化模型
$model=new ProductsModel();
$list=$model->getList();
//加载视图
require './products_list.html';