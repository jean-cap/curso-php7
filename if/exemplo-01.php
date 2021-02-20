<?php

require_once '../include/exemplo-01.php';

$qualSuaIdade = 41;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// Operadores if, else if e else:
if ($qualSuaIdade < $idadeCrianca) {
    echo 'Criança';
} else if ($qualSuaIdade < $idadeMaior) {
    echo 'Adolescente';
} else if ($qualSuaIdade < $idadeMelhor) {
    echo 'Adulto';
} else {
    echo 'Idoso';
}

quebraLinha();

// Operador ternário:
echo ($qualSuaIdade < $idadeMaior) ? 'Menor de idade' : 'Maior de idade';