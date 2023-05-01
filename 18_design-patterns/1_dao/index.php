<?php

include_once 'db.php';
include_once './dao/CarDAO.php';

$carDao = new CarDao($conn);

$cars = $carDao->findall();

?>

<h1>Insira um carro:</h1>

<form action="process.php" method="post">
  <div>
    <label for="brand">Marca do carro:</label> <br>
    <input type="text" name="brand" placeholder="Insira a marca.." />
  </div>
  <div>
    <label for="km">Kilometragem:</label> <br>
    <input type="text" name="km" placeholder="Insira a kilometragem.." />
  </div>
  <div>
    <label for="color">Cor do carro:</label> <br>
    <input type="text" name="color" placeholder="Insira a cor.." />
  </div>
  <input type="submit" value="Salvar" />
</form>

<ul>
  <?php foreach ($cars as $car) { ?>

    <li><?php $car->getBrand(); ?> - <?php $car->getKm(); ?> - <?php $car->getColor(); ?></li>

  <?php } ?>
</ul>