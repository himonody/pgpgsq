<?php
//1、创建目录
//mkdir('./aa');	//创建aa文件夹
//mkdir('./aa/bb');	//在aa目录下创建bb(aa目录必须存在)
//mkdir('./aa/bb/cc/dd',0777,true);	//递归创建

//2、删除文件夹
//rmdir('./aa/bb/cc/dd');	//删除dd文件夹

//3、重命名文件夹
//rename('./aa','./aaa');	//将aa改为aaa

//4、是否是文件夹
//+echo is_dir('./aaa')?'是文件夹':'不是文件夹';


//5、打开文件夹、读取文件夹、关闭文件夹
$folder=opendir('./');	//打开目录
//var_dump($folder);		//resource(3) of type (stream) 
while($f=readdir($folder)){	//读取文件夹
	if($f=='.' || $f=='..')
		continue;
	echo iconv('gbk','utf-8',$f),'<br>';
}
closedir($folder);		//关闭文件夹

