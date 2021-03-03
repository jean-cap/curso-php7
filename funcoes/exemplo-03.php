<?php

// Função com parâmetro default:
function ola($texto = 'mundo', $periodo = 'Bom dia')
{
    return "Olá {$texto}! {$periodo}! <br>";
}

echo ola();
echo ola('Jean', 'Boa tarde');
