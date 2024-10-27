<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(isset($_POST['button'])){	//点击了提交按钮
	$ch=$_POST['ch'];		//获取语文成绩
	$math=$_POST['math'];	//获取数学成绩
	if($ch=='' || !is_numeric($ch) || $ch<0 || $ch>100){
		echo '语文成绩必须在0-100之间';
	}
	elseif($math=='' || !is_numeric($math) || !($math>=0 && $math<=100)){
		echo '数学成绩必须在0-100之间';
	}else{
		$avg=($ch+$math)/2;		//求平均值
		echo "您的平均分是：{$avg}<br>";
		if($avg>=90)
			echo 'A';
		elseif($avg>=80)
			echo 'B';
		elseif($avg>=70)
			echo 'C';
		elseif($avg>=60)
			echo 'D';
		else
			echo 'E';
	}
}
?>
<form method="post" action="">
	语文: <input type="text" name="ch"> <br />
	数学： <input type="text" name="math"> <br />
	<input type="submit" name="button" value="判断成绩">
</form>
</body>
</html>