<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
if(!empty($_POST)){
    $dsn='mysql:dbname=data;charset=utf8';
    $pdo=new PDO($dsn,'root','root');
    $out=$_POST['card_out'];    //转出卡号
    $in=$_POST['card_in'];      //注入卡号
    $money=$_POST['money'];     //金额
    $pdo->beginTransaction();   //开启事务
    //转账
    $flag1=$pdo->exec("update bank set balance=balance-$money where cardid='$out'");
    $flag2=$pdo->exec("update bank set balance=balance+$money where cardid='$in'");
    //查看转成的账号是否小于0
    $stmt=$pdo->query("select balance from bank where cardid='$out'"); 
    $flag3=$stmt->fetchColumn()>=0?1:0;
    
    if($flag1 && $flag2 && $flag3){
        $pdo->commit ();    //提示事务
        echo '转账成功';
    }
    else{
        $pdo->rollBack ();  //回滚事务
        echo '转账失败';
    }
}
?>
<form action="" method="post">
    转成卡号： <input type="text" name="card_out" id=""> <br>
    转入卡号： <input type="text" name="card_in" id=""> <br>
    金额：<input type="text" name="money" id=""> <br>
    <input type="submit" value="提交">
</form>
</body>
</html>