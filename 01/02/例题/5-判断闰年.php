<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if(!empty($_POST)){	//$_POST不为空说明有post提交的数据
	//var_dump($_POST);
	$year=$_POST['year'];	//获取年份
	if($year==''){
		echo '您没有输入年份';
	}else{
		if(is_numeric($year)){	//判断$year是否是数字或字符串数字
			$year+=0;		//将字符串数字转成数字型  
			if(is_int($year)){	//is_int用来检测变量是否是整型
				if($year<1){
					echo '年份必须正整数';
				}else{
					if($year%4==0 && $year%100!=0 || $year%400==0)
						echo "{$year}是闰年";
					else
						echo "{$year}是平年";
				}
			}else{
				echo '您输入的不是整数';
			}
		}else{
			echo '您输入的不是数字';
		}
	}
}	
?>
<form method="post" action="">
	请输入年份： <input type="text" name="year"> <br />
	<input type="submit" name="button" value="判断闰年">
</form>
</body>
</html>