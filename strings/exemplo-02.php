<?php

include '../include/exemplo-01.php';

/* Funções para strings */

$nome = "jean carlos";

echo $nome;

quebraLinha();

// Converte a string para letras maiúsculas:
echo strtoupper($nome);

quebraLinha();

// Converte a string para letras minúsculas:
echo strtolower($nome);

quebraLinha();

// Converte só as primeiras letras de cada palavra da string para letras maiúsculas:
echo ucwords($nome);

quebraLinha();

// Converte só a primeira letra da string para letra maiúscula:
echo ucfirst($nome);