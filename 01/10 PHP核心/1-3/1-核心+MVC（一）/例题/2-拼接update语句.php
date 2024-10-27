<?php
$table='products';	//表名
$data['proname']='钢笔';
$data['proprice']=120;
$data['proID']='111';
//获取主键
function getPrimaryKey($table) {
	//连接数据库
	$link=mysqli_connect('localhost','root','root','data');
	mysqli_set_charset($link,'utf8');
	//查看表结构
	$rs=mysqli_query($link,"desc `{$table}`");
	//循环判断主键
	while($rows=mysqli_fetch_assoc($rs)){
		if($rows['Key']=='PRI')
			return $rows['Field'];
	}
}
//第一步：获取非主键
$keys=array_keys($data);	//获取所有键
$pk=getPrimaryKey($table);	//获取主键
$index=array_search($pk,$keys);	//返回主键在数组中的下标
unset($keys[$index]);		//删除主键
//第二步：拼接`键`='值'的形式
$keys=array_map(function($key) use ($data){
	return "`{$key}`='{$data[$key]}'";
},$keys);
$keys=implode(',',$keys);
//第三步：拼接SQL语句
echo $sql="update `{$table}` set $keys where $pk='{$data[$pk]}'";


