<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$num1='';	//$num1的初始值
$num2='';	//$num2的初始值
$op='';		//操作符
$result='';	//结果
if(!empty($_POST)) {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$op=$_POST['op'];		//操作符
	switch($op){
		case '+':
			$result=$num1+$num2;
			break;
		case '-':
			$result=$num1-$num2;
			break;
		case '*':
			$result=$num1*$num2;
			break;
		case '/':
			$result=$num1/$num2;
			break;
	}
}
?>
<form method="post" action="">
	<input type="text" name="num1" value='<?php echo $num1?>'>
	<select name="op">
		<option value="+" <?php echo $op=='+'?'selected':''?>>+</option>
		<option value="-" <?php echo $op=='-'?'selected':''?>>-</option>
		<option value="*" <?php echo $op=='*'?'selected':''?>>*</option>
		<option value="/" <?php echo $op=='/'?'selected':''?>>/</option>
	</select>
	<input type="text" name="num2" value='<?php echo $num2?>'>
	<input type="submit" name="button" value="=">
	<input type="text" name="result" value='<?php echo $result?>'>
</form>
</body>
</html>


