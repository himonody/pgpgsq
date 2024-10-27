<?php
//例题：
/*
function printer($num) {
	echo $num,'&nbsp;';
	if($num==1)	//递归出口
		return;
	printer($num-1);	//递归点
}
printer(9);	//9 8 7 6 5 4 3 2 1 
*/

//例题：从1加到100
/*
function cal($num) {
	if($num==1)
		return 1;
	return $num+cal($num-1);
}
echo cal(100);
*/
//分析
/**
第$i次执行			结果
cal(100)			100+cal(99)
=					100+99+cal(98)
=					100+99+98+cal(97)
=					100+99+98+++++cal(1)
=					100+99+98++++1
*/


//打印第5个斐波那契数
function fbnq($n) {
	if($n==1 || $n==2)
		return 1;
	return fbnq($n-1)+fbnq($n-2);
}
echo fbnq(5),'<br>';
/**
*分析：
fbnq(5)	=fbnq(4)+fbnq(3)
		=fbnq(3)*2+fbnq(2)
		=(fbnq(2)+fbnq(1))*2+fbnq(2)
		=(1+1)*2+1
		=5
*/
//打印前10个斐波那契数
for($i=1;$i<=10;$i++)
	echo fbnq($i),'&nbsp;';   //1 1 2 3 5 8 13 21 34 55 





