<?php

    class Car
    {
        public $rodas = 4;
        public $vidro = 'Sem pelicula';
    }

    class Mecanico
    {
        public function alterarRodas($obj)
        {
            $obj->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula)
        {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car();

    echo $carro->rodas.'<br>';

    $guilherme = new Mecanico();

    $guilherme->alterarRodas($carro);

    echo $carro->rodas.'<br>';

    $guilherme->colocarPelicula($carro, 'G20');
    echo $carro->vidro;
