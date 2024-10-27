<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(!empty($_POST)){
	echo '姓名：'.$_REQUEST['username'],'<br>';
}
?>
<form method="post" action="?username=berry">
	姓名： <input type="text" name="username"><br />
	<input type="submit" name="button" value="提交">
</form>
</body>
</html>