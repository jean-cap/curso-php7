<?php

/* Este arquivo será incluído em outros arquivos para usar o código inserido aqui */

function soma($a, $b)
{
    return $a + $b;
}

function quebraLinha($numeroDeQuebras = 0)
{
    $quebra = ($numeroDeQuebras) ? $numeroDeQuebras : 1;

    for ($i = 0; $i < $quebra; $i++) {
        echo '<br>';
    }
}
