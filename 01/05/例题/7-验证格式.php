<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(!empty($_POST)) {
	//第一步：创建finfo资源
	$info=finfo_open(FILEINFO_MIME_TYPE);
	//var_dump($info);		//resource(2) of type (file_info) 
	//第二步：将finfo资源和文件做比较
	$mime=finfo_file($info,$_FILES['face']['tmp_name']);
	//第三步，比较是否合法
	$allow=array('image/jpeg','image/png','image/gif');	//允许的类别
	echo in_array($mime,$allow)?'合法':'不合法';
}
?>
<form method="post" action="" enctype='multipart/form-data'>
	<input type="file" name="face">
	<input type="submit" name="button" value="上传">
</form>
</body>
</html>