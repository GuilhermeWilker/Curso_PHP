<?php

    class Pessoa
    {
        public function falar()
        {
            echo 'Olá, eu sou um objeto <br>';
        }

        public function somar($x, $y)
        {
            echo $x + $y.'<br>';
        }
    }

    $guilherme = new Pessoa();

    $guilherme->falar();
    $guilherme->somar(5, 8);
