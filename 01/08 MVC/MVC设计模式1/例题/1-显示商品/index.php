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
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<table border='1' width='980' bordercolor='#000'>
		<tr>
			<th>编号</th> <th>名称</th> <th>价格</th> <th>删除</th>
		</tr>
		<?php foreach($list as $rows):?>
		<tr>
			<td><?=$rows['proID']?></td>
			<td><?=$rows['proname']?></td>
			<td><?=$rows['proprice']?></td>
			<td><a href="">删除</a></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>