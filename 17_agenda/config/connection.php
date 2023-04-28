<?php

$host = 'localhost';
$db = 'agenda';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Ativando modo de erros -> Parar o software caso um erro ocorra
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $err = $e->getMessage();
    echo "Erro: $err";
}
