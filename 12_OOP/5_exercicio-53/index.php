<?php

    class Cachorro
    {
        public function latir()
        {
            echo 'Au Au <br>';
        }

        public function andar($m)
        {
            echo "O cachorro andou $m metros... <br>";
        }
    }

    $suzi = new Cachorro();

    $suzi->latir();
    $suzi->andar(50);
