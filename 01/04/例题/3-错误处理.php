<?php
$debug=false;		//开发模式
ini_set('error_reporting',E_ALL);	//所有的错误有报告
if($debug){
	ini_set('display_errors','on');	//错误显示是浏览器上
	ini_set('log_errors','off');	//错误不显示在日志中
}else{
	ini_set('display_errors','off');
	ini_set('log_errors','on');
	ini_set('error_log','./err.log');
}

//测试
echo $num;