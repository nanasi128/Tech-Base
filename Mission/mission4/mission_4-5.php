<?php
    $dsn = 'path';
    $user = 'user';
    $password = 'pass';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    $sql = $pdo -> prepare("INSERT INTO tbtest(name, comment) VALUES(:name, :comment)");
    $sql -> bindParam(':name', $name, PDO::PARAM_STR);
    $sql -> bindParam(':comment',$comment, PDO::PARAM_STR);
    $name = 'ななちゃん';
    $comment = 'てすとてすと';
    $sql -> execute();
?>
