<?php
$dsn='mysql:dbname=データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

$id = 2;
$name ="name2";
$comment ="comment2";
$sql='update tbtest set name =:name,comment=:comment where id=:id';
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
$stmt->execute();




?>