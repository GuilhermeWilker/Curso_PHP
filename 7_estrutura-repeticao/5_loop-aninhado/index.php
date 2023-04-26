<?php

    $i = 0;

    while ($i <= 10) {
        echo "Loop externo $i <br>";

        $j = 0;

        while ($j <= 5) {
            echo "Loop insterno $j <br>";

            ++$j;
        }

        ++$i;
    }
