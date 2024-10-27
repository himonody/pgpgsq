<?php
//1、整形
/*
$num1=10;		//十进制
$num2=010;		//八进制
$num3=0x10;		//十六进制
echo $num1,'<br>';		//10
echo $num2,'<br>';		//8
echo $num3;				//16
*/
//2、进制转换
/*
echo decbin(123),'<br>';   //十进制转二进制
echo bindec(1111011),'<br>';	//二进制转十进制
echo dechex(123),'<br>';		//十进制转十六进制
echo hexdec('7b'),'<br>';		//十六进制转十进制
echo decoct(123);				//十进制转八进制
*/

//3、浮点数
/*
var_dump(0.9==(1-0.1));		//bool(true) 
echo '<br>';
var_dump(0.1==(1-0.9));		//bool(false) 
echo '<br>';
var_dump(bccomp(0.1,1-0.9,5));	//int(0)   0表示相等
*/

//4、布尔型
/*
$flag=false;
var_dump($flag);	//bool(false) 
*/

//5、字符串型
/*
$name='tom';
echo '我的名字叫$name','<br>';	//我的名字叫$name
echo "我的名字叫$name",'<br>';	//我的名字叫tom
*/

/* 
$name='tom';
echo '$name是我的名字','<br>';	//$name是我的名字
echo "{$name}是我的名字",'<br>';	//{}表示获取变量的值（tom是我的名字）
echo "${name}是我的名字",'<br>';	//$和{只要挨着一起就可以（tom是我的名字）
*/

/*
echo '毛主席说：\'上课不要睡觉\'','<br>';	//转义字符   毛主席说：'上课不要睡觉'
echo '文件保存在c:\\';   //文件保存在c:\
*/

//字符串定界符   heredoc   类似于双引号
/*
$name='tom';
echo <<<shi
$name  <br>
<strong>锄禾日当午</strong>
<em>汗滴禾下土</em>
<u>谁知盘中餐</u>
<hr>
shi;

// nowdoc       //类似于单引号
echo <<<'shi'
$name  <br>
<strong>锄禾日当午</strong>
<em>汗滴禾下土</em>
<u>谁知盘中餐</u>
shi;
*/





