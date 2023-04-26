<?php

    class Pessoa
    {
        public function falar()
        {
            echo 'Olá pessoal!';
        }
    }

    $guilherme = new Pessoa();

    $guilherme->nome = 'Guilherme';

    echo $guilherme->nome;

    echo '<br>';

    $guilherme->falar();
