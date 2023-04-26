<?php

    $carro = [
        'marca' => 'Fiat',
        'modelo' => 'Mobi',
        'cor' => 'Amarela',
        ];

    print_r($carro);
    $marca = $carro['marca'];
    $modelo = $carro['modelo'];
    $cor = $carro['cor'];

    echo '<br>';

    echo "Resolvi comprar um $marca $modelo da cor $cor!!";
