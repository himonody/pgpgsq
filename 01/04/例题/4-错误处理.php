<?php
//自定义错误
/*
$age=100;
if($age>80){
	//trigger_error('年龄不能超过80岁');  //默认触发了notice级别的错误
	//trigger_error('年龄不能超过80岁',E_USER_NOTICE);	//触发notice级别的错误
	//trigger_error('年龄不能超过80岁',E_USER_WARNING);
	trigger_error('年龄不能超过80岁',E_USER_ERROR);   //错误用户error错误
}
*/

//自定义错误处理函数
/*
function error() {
	echo '这是自定义错误处理';
}
set_error_handler('error');	//注册错误处理函数
echo $num;
*/

/**
*自定义错误处理函数
*@param $errno int 错误类别
*@param $errstr string 错误信息
*@param $errfile string 文件地址
*@param $errline int 错误行号
*/
function error($errno,$errstr,$errfile,$errline) {
	switch($errno){
		case E_NOTICE:
		case E_USER_NOTICE:
			echo '记录在日志中，上班后在处理<br>';
			break;
		case E_WARNING:
		case E_USER_WARNING:	
			echo '给管理员发邮件<br>';
			break;
		case E_ERROR:
		case E_USER_ERROR:
			echo '给管理员打电话<br>';
			break;
	}
	echo "错误信息：{$errstr}<br>";
	echo "错误文件：{$errfile}<br>";
	echo "错误行号：{$errline}<br>";
}
set_error_handler('error');

echo $num;