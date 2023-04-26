<?php

$dataNascimento = mktime(3, 20, 15, 9, 19, 2001);
echo $dataNascimento.'<br>';

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo $dataNascimentoFormatada.'<br>';
