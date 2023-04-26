<?php

$arr = ['Guilherme', 'Carolina', 2, 8, true, false];

$x = count($arr);
$y = 0;

while ($y < $x) {
    if (
        is_string($arr[$y])) {
        echo $arr[$y].'<br>';
    }

    ++$y;
}
