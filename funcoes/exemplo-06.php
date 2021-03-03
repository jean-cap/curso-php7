<?php

require_once '../include/exemplo-01.php';

$pessoa = [
    'nome' => 'Jean',
    'idade' => 25
];

// Passagem de parâmetro por referência com o '&':
foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') {
        $value += 10;
    }
    echo $value;
    quebraLinha();
}

print_r($pessoa);