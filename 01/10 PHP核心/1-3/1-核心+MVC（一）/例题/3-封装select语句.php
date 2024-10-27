<?php
/**
*$table string 表名
*$cond array 条件
*/
function select($table,$cond=array()) {
	$sql="select * from `{$table}` where 1";
	//拼接条件
	if(!empty($cond)){
		foreach($cond as $k=>$v){
			if(is_array($v)){	//条件的值是数组类型
				switch($v[0]){	//$v[0]保存的是符号，$v[1]是值
					case 'eq':		//等于  equal
						$op='=';
						break;
					case 'gt':		//大于  greater than
						$op='>';
						break;
					case 'lt':
						$op='<';
						break;
					case 'gte':
					case 'egt':
						$op='>=';
						break;
					case 'lte':
					case 'elt':
						$op='<=';
						break;
					case 'neq':
						$op='<>';
						break;
				}
				$sql.=" and `$k` $op '$v[1]'";
			}else{
				$sql.=" and `$k`='$v'";
			}
		}
	}

	return $sql;
}

//测试
$table='products';	//表名
$cond=array(
	'proname'	=>	'钢笔',
	'proprice'	=>	array('eq','12'),
	'aa'	=>	array('gt',10),
	'bb'	=>	array('lt',20),
);

echo select($table),'<br>';
echo select($table,$cond);



