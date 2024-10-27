<?php
//1、for循环实现
/*
$sum=0;
for($i=1;$i<=100;$i++){
	$sum+=$i;	//$sum=$sum+$i;
}
echo $sum;
*/
//分析
/**
*
$i			$sum
1			1
2			1+2
3			1+2+3	
4			1+2+3+4
...
100			1+2+3+++100
*/


//2、while循环
$i=1;
$sum=0;
while($i<=100){
	//方法一
	/*
	$sum+=$i;
	$i++;
	*/

	//方法二
	$sum+=$i++;
}
echo $sum,'<br>';

//3、do-while循环
$i=1;
$sum=0;
do{
	$sum+=$i;
}while(++$i<=100);
echo $sum,'<br>';




