<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(isset($_POST['button'])) {
	switch($_POST['color']){
		case '1':
			$color='#FF0000';	//红色
			break;
		case '2':
			$color='#009900';	// 绿色
			break;
		case '3':
			$color='#0000FF';	//蓝色
			break;
		default:
			$color='#000000';	//黑色
	}
	echo <<<str
	<script type="text/javascript">
	window.onload=function(){
		document.getElementById('shi').style.color='$color';
	}
	</script>
str;
}
?>

<div id="shi">
	锄禾日当午， <br />
	
汗滴禾下土。 <br />
	
谁知盘中餐， <br />
	
粒粒皆辛苦。 <br />
</div>
<form method="post" action="">
	<select name="color">
		<option value="0">请选择颜色</option>
		<option value="1">红色</option>
		<option value="2">绿色</option>
		<option value="3">蓝色</option>
	</select>
	<input type="submit" name="button" value="更改颜色">
</form>

</body>
</html>