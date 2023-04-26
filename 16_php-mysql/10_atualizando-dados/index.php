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

    // Consultas de Banco de Dados
    $table = 'pessoas';
    $nome = 'Carolina';

    $stmt = $conn->prepare("UPDATE $table SET nome = ?, idade = ?");

    $idade = 25;

    $stmt->bind_param('si', $nome, $idade);
    $stmt->execute();

    if ($stmt->error) {
        echo 'Erro: '.$stmt->error;
    }
