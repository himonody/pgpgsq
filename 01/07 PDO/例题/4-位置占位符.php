<?php
    $dsn='mysql:dbname=data;charset=utf8';
    $pdo=new PDO($dsn,'root','root');
    //创建预处理对象
    $stmt=$pdo->prepare("insert into bank values (?,?)");   //?是占位符
    //执行预处理
    $cards=[
        ['1003',500],
        ['1004',100]
    ];
    foreach($cards as $card){
        //绑定参数，并执行预处理,
        //方法一：
        /*
        $stmt->bindParam(1, $card[0]);  //占位符的位置从1开始
        $stmt->bindParam(2, $card[1]);
        $stmt->execute();               //执行预处理
         */
        //方法二：
        /*
        $stmt->bindValue(1, $card[0]);
        $stmt->bindValue(2, $card[1]);
        $stmt->execute();
         */
        //方法三：如果占位符的顺序和数组的顺序一致，可以直接传递数组
        $stmt->execute($card);  
    }




