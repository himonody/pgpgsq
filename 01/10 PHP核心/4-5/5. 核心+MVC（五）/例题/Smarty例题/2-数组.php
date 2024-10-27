<?php
require './Smarty/smarty.class.php';
$smarty=new Smarty();
$stu=array('tom','berry');		//索引数组
$emp=array('name'=>'rose','sex'=>'女');	//关联数组
$goods=array(
	array('name'=>'手机','price'=>22),
	array('name'=>'钢笔','price'=>10)
);
$smarty->assign('stu',$stu);
$smarty->assign('emp',$emp);
$smarty->assign('goods',$goods);
$smarty->display('2-demo.html');