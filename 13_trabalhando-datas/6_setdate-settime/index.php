<?php

    $data = new DateTime();
    print_r($data);
    echo '<br>';

    $data->setDate(2001, 9, 19);
    print_r($data);
    echo '<br>';

    $data->setTime(5, 15, 10);
    print_r($data);
    echo '<br>';
