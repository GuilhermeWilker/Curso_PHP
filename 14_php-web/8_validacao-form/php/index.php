<?php

$validacoes = [];

if (count($_POST) > 0) {
    if ($_POST['nome'] === ' ') {
        $validacoes[] = 'Por favor preencha o nome do usuário!';
    }
}
