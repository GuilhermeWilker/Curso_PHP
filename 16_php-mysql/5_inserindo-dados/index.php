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

    $table = 'pessoas';

    $q = "INSERT INTO $table (nome, idade) VALUES ('Carolina', 14)";

    $conn->query($q);
    $conn->close();
