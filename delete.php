<?php
require_once 'db.php';

$sigla='EN';

$sql='DELETE FROM escolas WHERE sigla=:sigla';
$stmt=$PDO->prepare($sql);
$stmt->bindParam(':sigla', $sigla);
$result=$stmt->execute();

if(!result){
    var_dump($stmt->errorInfo());
    exit;
}

echo $stmt->rowCount().' linha(s) eliminada com sucesso';