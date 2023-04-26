<?php

$x = 4;
$limite = 30;

while ($x < $limite) {
    echo "X é igual a $x <br>";

    if ($x === 24) {
        echo 'Terminando o loop <br>';
        break;
    }

    $x += 2;
}
