<?php
//1、通过时间戳做文件名
/*
$path='face.stu.jpg';
//echo strrchr($path,'.');	//从最后一个点开始截取，一直截取到最后
echo time().rand(100,999).strrchr($path,'.');   
*/

//2、通过uniqid()做文件名
$path='face.stu.jpg';
echo uniqid().strrchr($path,'.'),'<br>';
echo uniqid('goods_').strrchr($path,'.'),'<br>';
echo uniqid('goods_',true).strrchr($path,'.'),'<br>';