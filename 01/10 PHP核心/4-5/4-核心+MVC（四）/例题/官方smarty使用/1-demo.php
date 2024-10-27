<?php
require './Smarty/Smarty.class.php';
$smarty=new Smarty();
$smarty->assign('title','锄禾');
$smarty->left_delimiter='{*';		//更改左界定
$smarty->right_delimiter='*}';		//更改右界定
$smarty->setTemplateDir('./view/');	//设置模板目录
$smarty->setCompileDir('./viewc/');	//设置混编目录
$smarty->display('1-demo.html');