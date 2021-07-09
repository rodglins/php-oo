<?php 

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)';
//$sql = 'insert into produtos(id, descricao) values(?, ?)';

$prepare = $pdo->prepare($sql);

//$prepare->bindParam(1, $_GET['id']);
//$prepare->bindParam(2, $_GET['descricao']);
$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();