<?php

include '../include/exemplo-01.php';

// Tipos básicos:
$nome = "HCode";
$site = "www.hcode.com.br";
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

// Tipos compostos:
$frutas = array('abacaxi', 'laranja', 'manga');

echo $frutas[2];

quebraLinha();

$nascimento = new DateTime();

var_dump($nascimento);

quebraLinha();

// Tipo resource
$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

quebraLinha();

// Tipo especial
$nulo = null;
