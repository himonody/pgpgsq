<?php
//1、定义常量
/*
define('NAME','tom');		//定义常量
define('PI',3.14,true);		//定义常量,不区分大小写
echo NAME,'<br>',Pi;
*/

//2、使用特殊字符做变量名
/*
define('%-%','tom');
echo constant('%-%');		//通过constant获取特殊字符作为常量名的常量
*/

//3、判断常量是否定义
/*
if(!defined('NAME')){	
	define('NAME','berry');
}
echo NAME;	//berry
*/

//4、const常量
/*
const NAME='tom';
echo NAME;		//tom
*/

//5、预定义常量
/*
echo PHP_VERSION,'<br>';		//PHP版本号
echo PHP_OS,'<br>';				//PHP操作系统
echo PHP_INT_MAX,'<br>';		//PHP中整型的最大值	
*/

//6、魔术常量
echo __LINE__,'<br>';		//获取当前行号
echo __FILE__,'<br>';		//文件的完整路径和文件名
echo __DIR__,'<br>';		//文件所在的目录
