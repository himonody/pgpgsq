<?php
//1、将字符串写到文件中
/*
$str="床前明月光，\r\n
疑是地上霜。\r\n
举头望明月，\r\n
低头思故乡。";
file_put_contents('./test.txt',$str);
*/


//2、从文件中读取
//echo file_get_contents('./test.txt');   //将整个文件读入一个字符串 
//readfile('./test.txt');	//读取输出文件内容


//3.1、打开文件写入
/*
$fp=fopen('./test.txt','w');    //打开文件返回文件指针（文件地址）
//var_dump($fp);		//resource(3) of type (stream) 
for($i=1;$i<=10;$i++)
	fputs($fp,'关关雎鸠'."\r\n");	//写一行
fclose($fp);	//关闭文件
*/

//3.2  打开文件读取
/*
$fp=fopen('./test.txt','r');	//打开文件读取
while($line=fgets($fp)){
	echo $line,'<br>';
}
*/


//3.3   打开文件追加
/*
$fp=fopen('./test.txt','a');	//打开文件追加
fputs($fp,'在河之洲');			//在文件末尾追加
*/

//4、是否是文件
//echo is_file('./test.txt')?'是文件':'不是文件';

//5、判断文件或文件夹是否存在
//echo file_exists('./test.txt')?'文件存在':'文件不存在';

//6、输出文件
/*
$path='./test.txt';
if(file_exists($path)){		//文件存在
	if(is_dir($path))		//如果是文件夹用rmdir()删除
		rmdir($path);
	elseif(is_file($Path))	//如果是文件用unlink()删除
		unlink($path);
}else{
	echo '文件夹或文件不存在';
}
*/

//7、二进制读取
/*
$path='./face.jpg';
$fp=fopen($path,'r');
header('content-type:image/jpeg');	//告知浏览器下面的代码通过jpg图片方式解析
echo fread($fp,filesize($path));	//二进制读取
*/

header('content-type:image/jpeg');
echo file_get_contents('./face.jpg');

