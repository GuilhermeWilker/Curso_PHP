<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($_POST) {
    $nome = $_POST['nome'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    if ($method == 'GET') {
        ?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome..." />
        </div>
        <input type="submit" value="Enviar" />
    </form>

    <?php
    } else {
        ?>
    <h1>O seu nome é <?php echo $nome; ?></h1>
    <?php
    }

?>
</body>

</html>