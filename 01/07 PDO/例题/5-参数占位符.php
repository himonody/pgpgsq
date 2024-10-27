<?php
$dsn='mysql:dbname=data;charset=utf8';
$pdo=new PDO($dsn,'root','root');
//创建预处理对象
$stmt=$pdo->prepare("insert into bank values (:p1,:p2)");   //:p1,:p2是参数占位符
//执行预处理
$cards=[
    ['p1'=>'1003','p2'=>500],
    ['p1'=>'1004','p2'=>1000]
];
foreach($cards as $card){
    //方法一：
    /*
    $stmt->bindParam(':p1', $card['p1']);
    $stmt->bindParam(':p2', $card['p2']);
    $stmt->execute();
     */
    //方法二：但数组的下标和参数名一致的时候就可以直接传递关联数组
    $stmt->execute($card);
}
