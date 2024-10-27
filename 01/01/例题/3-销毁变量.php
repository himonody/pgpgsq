<?php
$num1=10;
$num2=&$num1;
unset($num1);	//销毁的是变量名
unset($num2);
echo $num2;		//10

