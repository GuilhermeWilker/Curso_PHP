<?php

    class Pessoa
    {
        public $nome;
        public $idade;

        public function andar($m)
        {
            echo "Andou $m metros...";
        }
    }

    $guilherme = new Pessoa();

    $guilherme->nome = 'Guilherme Wilker';
    $guilherme->idade = 21;

    echo $guilherme->nome.'<br>';
    echo $guilherme->idade.' anos <br>';
    echo $guilherme->andar(20).'<br>';

    $joao = new Pessoa();

    $joao->nome = 'Joao';
    $joao->idade = 17;

    echo $joao->nome.'<br>';
    echo $joao->idade.' anos <br>';
    echo $joao->andar(5).'<br>';
