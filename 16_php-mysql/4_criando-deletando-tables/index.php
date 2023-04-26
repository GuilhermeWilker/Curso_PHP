<?php

    //  Iniciando a Conexão com Banco de Dados
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_errno) {
        echo 'Erro na conexão! <br>';
    }

    // $q = 'CREATE TABLE teste2 (nome VARCHAR(100), sobrenome VARCHAR(100))';
    $q = 'DROP TABLE teste';

    $conn->query($q);

    $conn->close();
