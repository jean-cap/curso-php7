<?php

require_once '../include/exemplo-01.php';

/*Classe Date*/
$dt = new DateTime();
$periodo = new DateInterval('P15D');

echo $dt->format('d-m-Y H:i:s');
quebraLinha();

$dt->add($periodo);

echo $dt->format('d-m-Y H:i:s');
quebraLinha();