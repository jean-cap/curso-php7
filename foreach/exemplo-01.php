<?php

require_once '../include/exemplo-01.php';

$meses = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];

foreach ($meses as $index => $mes) {
    echo "Indice: {$index}";
    quebraLinha();
    echo "O mês é: {$mes}";
    quebraLinha(2);
}