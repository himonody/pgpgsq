<?php
require './Smarty/smarty.class.php';
$smarty=new Smarty();
$smarty->caching=1;
$color=$_GET['color'];
$size=$_GET['size'];
$smarty->display('7-demo.html',"$color|$size");


