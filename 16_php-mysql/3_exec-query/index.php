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

    // Fazendo consultas [query]
    $sql = 'SELECT * FROM pessoas';

    $result = $conn->query($sql);
    print_r($result);

    $conn->close();
