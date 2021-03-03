<?php

require_once '../include/exemplo-01.php';

function soma_valores(int ...$valores)
{
    return array_sum($valores);
}

echo soma_valores(2, 2);

quebraLinha();

echo soma_valores(25, 33);

quebraLinha();

// Esses valores são convertidos para inteiro:
echo soma_valores(1.5, 3.2);