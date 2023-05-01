<?php

class Humano
{
    public $idade = 21;

    public function falar()
    {
        echo 'Olá mundo!<br>';
    }

    private function gritar()
    {
        echo 'AAAAAAAAAAAAA!!!!!<br>';
    }

    public function acessarGritar()
    {
        $this->gritar();
    }
}

class Programador extends Humano
{
}

$ze = new Humano();
$ze->falar();
$ze->acessarGritar();

$guilherme = new Programador();

$guilherme->falar();
echo $guilherme->idade.'<br>';
