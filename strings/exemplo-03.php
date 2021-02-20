<?php

include '../include/exemplo-01.php';

$empresa = "HCode";

// Substitui partes de uma string:
$empresa = str_replace('o', '0', $empresa);
$empresa = str_replace('e', '3', $empresa);

echo $empresa;