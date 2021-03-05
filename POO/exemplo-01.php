<?php


class Pessoa
{
    // Atributo
    public string $nome;

    // Método
    public function falar(): string
    {
        return "O meu nome é {$this->nome}!";
    }
}

$bibi = new Pessoa();
$bibi->nome = 'Bianca';
echo $bibi->falar();