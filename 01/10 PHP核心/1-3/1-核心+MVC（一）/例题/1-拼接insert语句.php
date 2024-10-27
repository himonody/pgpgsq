<?php
$table='products';	//表名
//插入的数据
$data['proid']='111';
$data['proname']='钢笔';
$data['proprice']=120;
//第一步：拼接字段名
$keys=array_keys($data);		//获取所有的字段名
$keys=array_map(function($key){	//在所有的字段名上添加反引号
	return "`{$key}`";
},$keys);
$keys=implode(',',$keys);		//字段名用逗号连接起来

//第二步：拼接值
$values=array_values($data);	//获取所有的值
$values=array_map(function($value){	//所有的值上添加单引号
	return "'{$value}'";
},$values);
$values=implode(',',$values);	//值通过逗号连接起来

//第三步：拼接SQL语句

echo $sql="insert into `{$table}` ($keys) values ($values)";





