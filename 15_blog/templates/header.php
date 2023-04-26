<?php
    include_once 'helpers/url.php';

    include_once 'data/posts.php';
    include_once 'data/categories.php';
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Prog</title>
    <!-- Estilos do projeto -->
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css" />
  </head>
  <body>
    <header>
      <a href="<?php echo $BASE_URL; ?>" id="logo">
      <img
        src="<?php echo $BASE_URL; ?>/img/logo.svg ?>"
        alt="<?php echo $post['title']; ?>"
      />
      </a>
      <nav>
        <ul id="navbar">
          <li><a href="<?php echo $BASE_URL; ?>" class="nav-link">Home</a></li>
          <li><a href="#" class="nav-link">Categorias</a></li>
          <li><a href="#" class="nav-link">Sobre</a></li>
          <li><a href="<?php echo $BASE_URL; ?>contato.php" class="nav-link">Contato</a></li>
        </ul>
      </nav>
    </header>

