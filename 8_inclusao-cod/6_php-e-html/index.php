<?php

include_once 'backend.php';

?>

<h1>Seja bem-vindo ao nosso site!</h1>
<p><?php echo $nome; ?> veja as nossas ofertas</p>

<h3>Confira nossos principais produtos:</h3>
<ul>
<?php foreach ($produto as $produto) { ?>
    <li><?php echo $produto; ?></li>
<?php } ?>
</ul>
