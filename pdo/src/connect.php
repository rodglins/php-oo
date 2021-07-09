<?php 

declare(strict_types=1);

$pdo = null;

try{
	$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=rodglins', 'root', ''); /*nome da base, usuário, senha*/
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

return $pdo;