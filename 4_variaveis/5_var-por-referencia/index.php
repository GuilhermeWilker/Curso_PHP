<?php

$x = 2;
$y = &$x;

echo "$x <br>";
echo "$y <br>";

// Atribuição após referência
$y = 15;
echo "$x <br>";
echo "$y <br>";
