<?php

include '../include/exemplo-01.php';

$nome1 = "HCode";

$nome2 = 'Treinamentos';

// A diferença entre aspas simples e duplas é que o PHP expande as variáveis contidas dentro de uma string de aspas duplas:
var_dump($nome1);

quebraLinha();

var_dump($nome2);

quebraLinha();

echo "ABC $nome1"; // -> ABC HCode - Com interpolação de variável

quebraLinha();

echo 'ABC $nome1'; // -> ABC $nome1 - Sem interpolação de variável