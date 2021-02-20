<?php

include '../include/exemplo-01.php';

$a = (int)$_GET["a"];
$b = (int)$_GET["b"];

var_dump($a);

quebraLinha();

var_dump($b);

quebraLinha();

echo "Resultado = " . ($a + $b);

quebraLinha();

$ip = $_SERVER["REMOTE_ADDR"];

$script = $_SERVER["SCRIPT_NAME"];

echo $ip;

quebraLinha();

echo $script;