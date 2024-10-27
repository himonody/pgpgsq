<?php
//1、参数个数约束
/*
function fun($name,$age,...$hobby) {
	echo '姓名：'.$name,'<br>';
	echo '年龄：'.$age,'<br>';
	print_r($hobby);
	echo '<hr>';
}
fun('tom',22);
fun('berry',25,'读书','睡觉');
*/

//2、参数展开
/*
function fun(...$args) {
	print_r($args);
	echo '<br>';
}
$num=[10,20];
echo '<pre>';
fun(...$num);   //将数组中的参数展开
*/

//类型约束
/*
function fun(string $name,int $age) {
	echo "姓名：{$name},'<br>'";
	echo "年龄：{$age}<br>";
}
fun('tom',22);
*/

//返回值必须是整型
/*
function fun(int $num1,int $num2):int {
	return $num1+$num2;
}
echo fun(10,20);		//30
*/

function fun():void {
	return;
}
fun();

