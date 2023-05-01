<?php

    class Humano
    {
        public const OLHOS = 2;
        public const BRAÇOS = 2;
        public const PERNAS = 2;

        public function mostrarConstant()
        {
            echo self::BRAÇOS.'<br>';
        }
    }

    $guilherme = new Humano();

    echo $guilherme::OLHOS.'<br>';
    $guilherme->mostrarConstant();
