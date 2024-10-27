<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<!--表单提交数据-->
<form method="post" action="./2-demo2.php">
	语文： <input type="text" name="ch"> <br />
	数学： <input type="text" name="math"> <br />
	<input type="submit" name="button" value="提交"> <br><br>
</form>
<!--超链接提交数据-->
<a href="2-demo2.php?ch=77&math=88">跳转</a> <br><br>
<!--js提交数据-->
<input type="button" value="点击" onclick="location.href='2-demo2.php?ch=66&math=55'"> <br><br>

<input type="button" value="点击" onclick="location.assign('2-demo2.php?ch=11&math=22')">
</body>
</html>