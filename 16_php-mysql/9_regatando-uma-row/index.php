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

    $idade = 25;

    $stmt = $conn->prepare("SELECT * FROM $table WHERE idade = ?");
    $stmt->bind_param('i', $idade);
    $stmt->execute();

    $result = $stmt->get_result();

    $person = $result->fetch_row();

    print_r($person);

    $conn->close();
