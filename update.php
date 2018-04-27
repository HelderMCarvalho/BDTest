<?php
require_once 'db.php';

$sql='UPDATE escolas set NOME=:nome WHERE sigla=:sigla';
$stmt=$PDO->prepare($sql);
$stmt->bindParam(':sigla', $sigla);
$stmt->bindParam(':nome', $nome);
$result=$stmt->execute();

if(!result){
    var_dump($stmt->errorInfo());
    exit;
}

echo $stmt->rowCount().' linha(s) alterada com sucesso';