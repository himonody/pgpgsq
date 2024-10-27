<?php
/*
//1、索引数组的声明
$stu=array('tom','berry','ketty');   //索引数组
print_r($stu);	//输出数组  Array ( [0] => tom [1] => berry [2] => ketty ) 
echo '<hr>';
echo $stu[0],'<br>';	//tom
echo $stu[1],'<br>';	//berry
echo $stu[2],'<hr>';	//ketty

//2、关联数组
$emp=array('name'=>'李白','sex'=>'男','age'=>22);
print_r($emp);	//Array ( [name] => 李白 [sex] => 男 [age] => 22 ) 
echo '<hr>';
echo $emp['name'],'<br>';	//李白
echo $emp['sex'],'<br>';	//男
echo $emp['age'],'<br>';			//22

//3、下标练习
$array=array(1=>'a','b','c','d');
print_r($array);   //Array ( [1] => a [2] => b [3] => c [4] => d ) 
echo '<br>';

$array=array('a',2=>'b','c',5=>'d');
print_r($array);  //Array ( [0] => a [2] => b [3] => c [5] => d ) 
echo '<br>';

$array=array('a','name'=>'b','c','sex'=>'d');
print_r($array); //Array ( [0] => a [name] => b [1] => c [sex] => d ) 
echo '<br>';

$array=array(1=>'a',1=>'b',1=>'c','d');
print_r($array);	//Array ( [1] => c [2] => d ) 
echo '<hr>';
*/
//4、下标练习
/*
$stu[true]='tom';		//转成1
$stu[false]='berry';	//转成0
$stu[12.9]='aa';		//转成12（取整数部分）
$stu[-10]='bb';			//负数可以做下标
$stu[-12.3]='cc';		//取负整数
$stu['10']='dd';		//字符串数字转成数字
$stu['']='ee';			//空字符串也可以做下标
$stu[null]='ff';		//转成空字符串做下标
print_r($stu);
*/

//5、短数组语法
/*
$stu=['tom','berry','ketty'];
print_r($stu);  //Array ( [0] => tom [1] => berry [2] => ketty ) 
*/

//6、PHP7.1可以数组的赋值，例题，两个数交换
$num1=10;
$num2=20;
[$num1,$num2]=[$num2,$num1];
echo $num1,'<br>',$num2,'<hr>';

//7、二维数组的声明
$stu=[
	['name'=>'tom','sex'=>'男','age'=>22],
	['name'=>'berry','sex'=>'女','age'=>23]
];
echo '<pre>';
print_r($stu);


