<?php

require_once '../include/exemplo-01.php';

function salario()
{
    return 946.00;
}

echo 'Jean recebeu 3 salários: ' . (salario() * 3);