<?php

include '../include/exemplo-01.php';

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

// A função strpos() pega a posição da palavra buscada na string:
$posicao = strpos($frase, $palavra);

// A função substr() retorna uma parte específica da string:
$texto1 = substr($frase, 0, $posicao);

// A função strlen() retorna o comprimento da string:
$texto2 = substr($frase, $posicao + strlen($palavra), strlen($frase));

echo $texto1 .  " filha " . $texto2;