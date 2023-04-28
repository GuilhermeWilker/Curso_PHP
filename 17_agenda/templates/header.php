<?php

    include_once 'config/url.php';
    include_once 'config/process.php';

    // limpa a mensagem
    //    if ($_SESSION['msg']) {
    //        $printMsg = $_SESSION['msg'];
    //      $_SESSION['msg'] = '';
    // }

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Css -->
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/style.css" />
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon" />
    <title>Agenda de contatos</title>
  </head>
  
  <body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo $BASE_URL; ?>index.php">
        <img src="<?php echo $BASE_URL; ?>img/logo.svg" alt="Agenda" />
      </a>

      <div>
        <div class="navbar-nav">
        <a class="nav-link active" id="home-link" href="<?php echo $BASE_URL; ?>index.php">Agenda</a>
        <a class="nav-link active" id="home-link" href="<?php echo $BASE_URL; ?>create.php">Adicionar contato</a>
        </div>
      </div>
    </nav>
  </header>
    