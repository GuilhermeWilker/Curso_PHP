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

    $nome = 'João';
    $idade = 25;

    // Muito mais seguro
    $stmt = $conn->prepare("INSERT INTO $table (nome, idade) VALUES (?, ?)");
    $stmt->bind_param('si', $nome, $idade);
    $stmt->execute();
