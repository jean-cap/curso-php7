<?php

require_once '../include/exemplo-01.php';

$a = 10;

// Passagem de parâmetro como referência
function trocaValor(&$a)
{
    $a += 50;
    return $a;
}

echo 'Valor da variável $a: ' . $a;

quebraLinha();

echo 'Varlos do retorno da função: ' . trocaValor($a);

quebraLinha();

echo 'Varlos do retorno da função: ' . trocaValor($a);

quebraLinha();

echo 'Valor da variável $a: ' . $a;