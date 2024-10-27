<?php
try{
    $dsn='mysql:dbname=data;charset=utf8';
    $pdo=new PDO($dsn,'root','root');
    //这是PDO错误模式属性，PDO自动抛出异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query('select * from newsssssss');
} catch (PDOException $ex) {
    echo '错误信息：'.$ex->getMessage(),'<br>';
    echo '错误文件：'.$ex->getFile(),'<br>';
    echo '错误行号：'.$ex->getLine();
}


        



