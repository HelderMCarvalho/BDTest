<?php
    require_once 'db.php';

    $sql='DELETE FROM utilizadores WHERE id=:id';
    $stmt=$PDO->prepare($sql);
    $stmt->bindParam(':id', $_REQUEST['id']);
    $result=$stmt->execute();

    if(!$result){
        var_dump($stmt->errorInfo());
        exit;
    }

    header("Location: ./index.php");
    exit();