<?php

session_start();

include_once __DIR__.'/connection.php';
include_once __DIR__.'/url.php';

$table = 'contacts';

$data = $_POST;

// Modificações no Banco de Dados
if (!empty($data)) {
    // Criar o contato
    if ($data['type'] === 'create') {
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "INSERT INTO $table (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':observations', $observations);

        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato criado com sucesso!';
        } catch (PDOException $e) {
            $err = $e->getMessage();
            echo "Erro: $err";
        }
    } elseif ($data['type'] === 'edit') {
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];
        $id = $data['id'];

        $query = "UPDATE $table
                  SET name = :name, phone = :phone, observations = :observations
                   WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':observations', $observations);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato editado com sucesso!';
        } catch (PDOException $e) {
            $err = $e->getMessage();
            echo "Erro: $err";
        }
    } elseif ($data['type'] === 'delete') {
        $id = $data['id'];

        $query = "DELETE FROM $table WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato removido com sucesso!';
        } catch (PDOException $e) {
            $err = $e->getMessage();
            echo "Erro: $err";
        }
    }

    // Redirecionando ao home
    header('Location:'.$BASE_URL.'../index.php');
} else {
    // Seleção no Banco de Dados
    if (!empty($_GET)) {
        $id = $_GET['id'];
    }

    if (!empty($id)) {
        // Query retornando contato único
        $query = "SELECT * FROM $table WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        // Query retornando vários contatos
        $contacts = [];

        $query = "SELECT * FROM $table";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

// Fechando conexão
$conn = null;
