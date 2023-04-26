<?php

    //  Iniciando a Conexão com Banco de Dados
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'cursophp';

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Fazendo consultas de query
    $table = 'pessoas';

    $nome = 'Pedro';
    $idade = 20;

    $stmt = $conn->prepare("UPDATE $table SET nome = :nome, idade = :idade");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->execute();
