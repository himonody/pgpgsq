<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(!empty($_POST)) {
	if($_FILES['face']['error']==0){
		move_uploaded_file($_FILES['face']['tmp_name'],'./'.$_FILES['face']['name']);
	}else{
		echo '上传有误';
		echo '错误码:'.$_FILES['face']['error'];
	}
}
?>
<form method="post" action="" enctype='multipart/form-data'>
	<input type="file" name="face">
	<input type="submit" name="button" value="上传">
</form>
</body>
</html>