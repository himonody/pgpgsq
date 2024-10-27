<?php
require './Smarty.class.php';
$smarty=new Smarty();
$smarty->assign('title','锄禾');
$smarty->compile('./index.html');





