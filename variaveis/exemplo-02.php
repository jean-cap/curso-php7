<?php

include '../include/exemplo-01.php';

/*
$anoNascimento = "2000";

$nomeCompleto = "Jean Carlos";
*/

// Na linha de baixo temos uma variável com número no nome.
$nome1 = "Jean";

$sobrenome = "Carlos";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

quebraLinha();

unset($nome1);

if (isset($nome1)) {
    echo $nome1;
}