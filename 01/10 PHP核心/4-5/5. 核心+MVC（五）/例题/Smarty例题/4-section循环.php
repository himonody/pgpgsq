<?php
require './Smarty/smarty.class.php';
$smarty=new Smarty();
$smarty->assign('stu',array('tom','berry'));
$smarty->display('4-demo.html');





