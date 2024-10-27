<?php
require './Smarty/Smarty.class.php';
$smarty=new Smarty();
$smarty->template_dir='./view/';	//更改模板目录
$smarty->templatec_dir='./viewc/';	//更改混编目录
$smarty->assign('title','锄禾');
$smarty->compile('index.html');





