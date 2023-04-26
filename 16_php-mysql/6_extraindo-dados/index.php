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

    $q = "SELECT * FROM $table";

    $result = $conn->query($q);
    $conn->close();

    // Resultado unico
    $person = $result->fetch_assoc();

    // Resultado multiplos
    $people = $result->fetch_all();

    print_r($people);
