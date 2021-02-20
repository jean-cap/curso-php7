<?php

$nome = "Jean";

function teste1() {
    global $nome;
    echo $nome . " (Teste 1)<br>";
}

function teste2() {
    $nome = "Carlos";
    echo $nome . " (Teste 2)<br>";
}

teste1();
teste2();