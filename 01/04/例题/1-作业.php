<?php
//1、求数组的和、平均值
$num=[1,20,53,23,14,12,15];
$sum=0;
for($i=0,$n=count($num);$i<$n;$i++){
	$sum+=$num[$i];	//求和
}
echo '和是：'.$sum,'<br>';		//和是：138
echo '平均值：'.number_format($sum/count($num),1);   //精确到小数点后面1位  平均值：19.7
echo '<hr>';

//2、数组翻转 
$stu=['tom','berry','ketty','rose','jake'];
for($i=0,$j=count($stu)-1;$i<$j;$i++,$j--){
	[$stu[$i],$stu[$j]]=[$stu[$j],$stu[$i]];   //元素交换
}
print_r($stu); //Array ( [0] => jake [1] => rose [2] => ketty [3] => berry [4] => tom ) 
echo '<hr>';

//3、遍历二维数组
$stu=[
	[1,2,3,4],
	[10,20,30,40]
];
for($i=0;$i<count($stu);$i++){	//循环第一列
	for($j=0;$j<count($stu[$i]);$j++){   //循环第二列
		echo $stu[$i][$j],'&nbsp;';
	}
	echo '<br>';
}
echo '<br>';

//4 、循环输出1-100，其中3的倍数输出A，5的倍数输出B，15输出C
for($i=1; $i<=100; $i++) {
	if($i%15==0)   //先写%15,，因为可以%15的值一定可以%3和%5
		echo 'C';
	elseif($i%3==0)
		echo 'A';
	elseif($i%5==0)
		echo 'B';
	else
		echo $i;

	echo '&nbsp;';
}
echo '<hr>';

//5、打印水仙花数  
for($i=100;$i<=999;$i++){
	$a=(int)($i/100);		//百位数
	$b=(int)(($i%100)/10);	//十位数
	$c=$i%10;				//个位数
	if($i==pow($a,3)+pow($b,3)+pow($c,3))
		echo $i,'<br>';
}
echo '<hr>';

//6、打印100以内的斐波那契数
$num1=1;   //第一个数
$num2=1;    //第二个数
echo $num1,'&nbsp;',$num2,'&nbsp;';
while(true){
	$num3=$num1+$num2;   //第三个数是前面两个数的和
	if($num3>100)		 //超过100就终止循环
		break;
	echo $num3,'&nbsp;';
	$num1=$num2;		//将$num2移给$num1
	$num2=$num3;		//将$num3移给$num2
}
//1 1 2 3 5 8 13 21 34 55 89 
