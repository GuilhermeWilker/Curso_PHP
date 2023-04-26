<?php

    $cincoDias = strtotime('5 days');

    echo $cincoDias.'<br>';

    $dataAtualMaisCinco = date('d/m/y', $cincoDias);

    echo $dataAtualMaisCinco;
