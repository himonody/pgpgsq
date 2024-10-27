<?php
require './Smarty/smarty.class.php';
$smarty=new Smarty();
$smarty->caching=true;		//开启缓存
$smarty->cache_lifetime=300;	//缓存的生命周期是3秒
if(date('H')<=9)
	$smarty->force_cache=true;	//强制更新缓存
$smarty->display('6-demo.html');



