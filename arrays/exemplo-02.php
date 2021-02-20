<?php

require_once '../include/exemplo-01.php';

$carros[0][0] = 'GM';
$carros[0][1] = 'Cobalt';
$carros[0][2] = 'Onix';
$carros[0][3] = 'Camaro';

$carros[1][0] = 'Ford';
$carros[1][1] = 'Fiesta';
$carros[1][2] = 'Fusion';
$carros[1][3] = 'Eco Sport';

// Acessando um item do array:
echo $carros[0][3];
quebraLinha();

// Acessando o último item do array:
echo end($carros[1]);