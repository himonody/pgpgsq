<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
/**
*验证错误
*如果有错，就返回错误，如果没错，就返回null
*/
function check($file) {
	//1：验证是否有误
	if($file['error']!=0){
		switch($file['error']) {
			case 1:
				return '文件大小超过了php.ini中允许的最大值,最大值是：'.ini_get('upload_max_filesize');
			case 2:
				return '文件大小超过了表单允许的最大值';
			case 3:
				return '只有部分文件上传';
			case 4:
				return '没有文件上传';
			case 6:
				return '找不到临时文件';
			case 7:
				return '文件写入失败';
			default:
				return '未知错误';
		}
	}
	//2、验证格式
	$info=finfo_open(FILEINFO_MIME_TYPE);
	$mime=finfo_file($info,$file['tmp_name']);
	$allow=array('image/jpeg','image/png','image/gif');	//允许的类别
	if(!in_array($mime,$allow)){
		return '只能上传'.implode(',',$allow).'格式';
	}
	//3、验证大小
	$size=123456789;
	if($file['size']>$size){
		return '文件大小不能超过'.number_format($size/1024,1).'K';
	}
	//4、验证是否是http上传
	if(!is_uploaded_file($file['tmp_name']))
		return '文件不是HTTP POST上传的<br>';

	return null;  //没有错误
}

//表单提交
if(!empty($_POST)) {
	//上传文件过程中有错误就显示错误
	if($error=check($_FILES['face'])){
		echo $error;
	}else{
		//文件上传，上传的文件保存到当天的文件夹中
		$foldername=date('Y-m-d');		//文件夹名称
		$folderpath="./uploads/{$foldername}";	//文件夹路径
		if(!is_dir($folderpath))
			mkdir($folderpath);
		$filename=uniqid('',true).strrchr($_FILES['face']['name'],'.');	//文件名
		$filepath="$folderpath/$filename";	//文件路径
		if(move_uploaded_file($_FILES['face']['tmp_name'],$filepath))
			echo "上传成功,路径是：{$foldername}/{$filename}";
		else
			echo '上传失败<br>';
	}

}
?>
<form method="post" action="" enctype='multipart/form-data'>
	<input type="file" name="face">
	<input type="submit" name="button" value="上传">
</form>
</body>
</html>