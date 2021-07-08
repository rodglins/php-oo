<?php

$data = new DateTime();

$intervalo = new DateInterval('P5DT10H50M'); 
$data->sub($intervalo);

var_dump($data);