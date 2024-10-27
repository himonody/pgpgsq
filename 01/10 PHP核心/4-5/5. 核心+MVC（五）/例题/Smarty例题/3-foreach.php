<?php
require './Smarty/smarty.class.php';
$smarty=new Smarty();
$smarty->assign('stu',array('first'=>'tom','second'=>'berry','third'=>'ketty','forth'=>'rose'));
$smarty->display('3-demo.html');