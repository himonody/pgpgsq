<?php
//1、实例化PDO
$dsn='mysql:host=localhost;port=3306;dbname=data;charset=utf8';
$pdo=new PDO($dsn,'root','root');
//2执行数据操作语句
//2.1 执行增加
/*
if($pdo->exec("insert into news values (null,'bb','bbbbbb',unix_timestamp())"))
    echo '自动增长的编号是：'.$pdo->lastInsertId (),'<br>';
*/
//2.2 执行修改
//echo $pdo->exec("update news set title='静夜思' where id in (3,4)");
//2.3 执行删除
//echo $pdo->exec('delete from news where id=5');\
//2.4 完善
$sql="update news set title='静夜思1' where ids in (3,4)";
$rs=$pdo->exec($sql);
if($rs){
    echo 'SQL语句执行成功<br>';
    if(substr($sql, 0,6)=='insert')
        echo '自动增长的编号是：'.$pdo->lastInsertId (),'<br>';
    else
        echo '受到影响的记录数是：'.$rs,'<br>';
}elseif($rs===0){
    echo '数据没有变化<br>';
}elseif($rs===false){
    echo 'SQL语句执行失败<br>';
    echo '错误编号：'.$pdo->errorCode(),'<br>';
    //var_dump($pdo->errorInfo());
    echo '错误信息：'.$pdo->errorInfo()[2];
}


