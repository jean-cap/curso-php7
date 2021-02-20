<?php

include '../include/exemplo-01.php';

$resultado =  (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado);

quebraLinha();

$resultado =  (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);