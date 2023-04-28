<?php
include_once 'templates/header.php';
?>
  <div class="container">
    <?php if (isset($printMsg) && $printMsg != '') { ?>
      <p id="msg"><?php echo $printMsg; ?></p>
    <?php } ?>
    <h1 id="main-title">Minha agenda</h1>
    <?php if (count($contacts) > 0) { ?>
      <table class="table" id="contacts-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contacts as $contact) { ?>
          <tr>
            <th scope="row"><?php echo $contact['id']; ?></th>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td class="actions">
              <a href="<?php echo $BASE_URL; ?>show.php?id=<?php echo $contact['id']; ?>"><i class="fas fa-eye check-icon"></i></a>
              <a href="<?php echo $BASE_URL; ?>edit.php?id=<?php echo $contact['id']; ?>"><i class="far fa-edit edit-icon"></i></a>
              <form class="delete-form" action="<?php echo $BASE_URL; ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                <button type="submit"><i class="fas fa-times delete-icon"></i></button>
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?php echo $BASE_URL; ?>create.php">clique aqui para adicionar</a>.</p>
    <?php } ?>
  </div>
<?php include_once 'templates/footer.php'; ?>