<?php

    // print_r($_GET);

    if (
        $_GET['nome']) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    } else {
        $nome = 'Padrão';
        $idade = 'Padrão';
    }

    ?>

<h1>Olá <?php echo $nome; ?>, seja bem-vindo!</h1>
<h4>Voce tem <?php echo $idade; ?> anos.</h4>
