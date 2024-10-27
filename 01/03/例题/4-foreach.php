<?php
$stu=['tom','berry','ketty'];
foreach($stu as $v){
	echo $v,'<br>';
}
/**
tom
berry
ketty
*/
echo '<hr>';
foreach($stu as $k=>$v){
	echo "{$k}:{$v}<br>";
}
/**
0:tom
1:berry
2:ketty
*/
*/