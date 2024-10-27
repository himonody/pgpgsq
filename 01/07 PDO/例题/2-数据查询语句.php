<?php
$dsn='mysql:dbname=data;charset=utf8';
$pdo=new PDO($dsn,'root','root');
//1、执行数据查询语句
$stmt=$pdo->query('select * from products');
//var_dump($stmt);        //object(PDOStatement)
//2、获取数据
//2.1  获取二维数组
//$rs=$stmt->fetchAll();  //默认返回关联和索引数组
//$rs=$stmt->fetchAll(PDO::FETCH_BOTH);     //返回关联和索引数组
//$rs=$stmt->fetchAll(PDO::FETCH_NUM);      //返回索引数组
//$rs=$stmt->fetchAll(PDO::FETCH_ASSOC);    //返回关联数组
//$rs=$stmt->fetchAll(PDO::FETCH_OBJ);        //返回对象数组

//2.2  获取一维数组,匹配完成后指针下移一条
//$rs=$stmt->fetch();     //关联和索引数组
//$rs=$stmt->fetch(PDO::FETCH_NUM);   //索引数组
//例题：通过while循环获取所有数据
/*
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $rs[]=$row;
}
echo '<pre>';
var_dump($rs);
 */

//3.3  匹配列：匹配当前行的第n列，列的编号从0开始，匹配完毕后指针下移一条
//echo $stmt->fetchColumn();  //获取当前行的第0列
//echo $stmt->fetchColumn(1);  //获取当前行的第1列

//3.4  总行数，总列数
/*
echo '总行数：'.$stmt->rowCount(),'<br>';
echo '总列数：'.$stmt->columnCount();
*/

//3.5 遍历PDOStatement对象（PDOStatement对象是有迭代器的）
foreach($stmt as $row){
    echo $row['proname'],'-',$row['proprice'],'<br>';
}