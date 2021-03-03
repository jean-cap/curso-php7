<?php

require_once '../include/exemplo-01.php';

// Procedimento (sem valor de retorno)
function ola1()
{
    echo 'Hello World!';
}

ola1();

quebraLinha();

// Função (retorna valor)
function ola2()
{
    return 'Hello World!';
}

echo ola2();