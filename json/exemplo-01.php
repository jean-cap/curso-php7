<?php

$pessoas = [];

array_push($pessoas, [
    'nome' => 'Jean Carlos',
    'idade' => 25
]);

array_push($pessoas, [
    'nome' => 'Bianca',
    'idade' => 10
]);

echo json_encode($pessoas);