<?php
//1、阶梯数字
/*
for($i=1;$i<=9;$i++){	//循环行
	for($j=1;$j<=$i;$j++){	//循环列
		echo $j,'&nbsp;';
	}
	echo '<br>';
}
*/
?>

<style type="text/css">
	table{
		width:980px;
	}
	table,td{
		border:solid 1px #0000FF;
		border-collapse:collapse;
	}
	td{
		height:40px;	
	}
</style>

<table>
<?php
for($i=1;$i<=9;$i++){	//行
	echo '<tr>';
	for($j=1;$j<=$i;$j++){	//列
		echo "<td>{$j}*{$i}=".($j*$i).'</td>';
	}
	echo '</tr>';
}
?>
</table>


