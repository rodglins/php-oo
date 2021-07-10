<?php 

require_once "vendor/autoload.php";

use Olinda\Rodgl\search;

$busca = new search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);