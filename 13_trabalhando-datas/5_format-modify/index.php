<?php

    $data = new DateTime();
    echo $data->format('d/m/y').'<br>';

    echo $data->format('l, F - Y').'<br>';

    $data->modify('+5 days');
    echo $data->format('d/m/y').'<br>';

    echo $data->format('l, F - Y').'<br>';
