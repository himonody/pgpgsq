<?php
$img=imagecreate(200,100);	//创建图片
//var_dump($img);		//resource(2) of type (gd) 
imagecolorallocate($img,255,0,0);	//给图片分配第一个颜色,默认是背景色
//操作一：显示图片
/*
//告知浏览器用jpg格式显示
header('content-type:image/jpeg');
//显示图片
imagejpeg($img);	//用jpg格式显示图片
*/

//操作二：保存图片（不需要设置header头）
imagejpeg($img,'./tu.jpg');



//imagepng($img);	//图片按png格式输出
//imagegif($img);	//图片按gif格式输出
