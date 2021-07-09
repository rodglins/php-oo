<?php

$data = new DateTime();

/*
data->format('d-m-y');
data->format('d-m-Y');
data->format('d-m-Y H:i:s');
*/

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); //adiciona um período de 5 minutos
$data->add($intervalo);

var_dump($data);
