<?php

$pessoa1 = [
    'nome' => 'Guilherme',
    'idade' => 21,
    ];

$pessoa2 = [
    'nome' => 'Carolina',
    'idade' => 12,
    ];

print_r($pessoa1);
print_r($pessoa2);
echo '<br>';

$p1_nome = $pessoa1['nome'];
$p1_idade = $pessoa1['idade'];

if ($p1_idade > 18) {
    echo "$p1_nome é maior de idade, pois possui $p1_idade anos!";
} else {
    echo "$p1_nome é menor de idade, pois possui $p1_idade anos!";
}

echo '<br>';

$p2_nome = $pessoa2['nome'];
$p2_idade = $pessoa2['idade'];

if ($p2_idade > 18) {
    echo "$p2_nome é maior de idade, pois possui $p2_idade anos!";
} else {
    echo "$p2_nome é menor de idade, pois possui $p2_idade anos!";
}
