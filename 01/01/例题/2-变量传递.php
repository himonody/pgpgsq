<?php
//值传递
/*
$num1=10;	//将10付给$num1
$num2=$num1;	//将$num1的值付给$num2
$num2=20;		//更改$num2
echo $num1;		//10
*/

//地址传递
$num1=10;		//将10付给$num1
$num2=&$num1;	//将$num1的地址付给$num2
$num2=20;		//更改$num2
echo $num1;		//20
