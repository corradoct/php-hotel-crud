<?php

include __DIR__ . '/server.php';
include __DIR__ . '/../partials/header.php';

?>

<?php if(!empty($room)) { ?>
  <main>
    <h2>Stai vedendo la stanza numero : <?php echo $room['room_number']; ?></h2>
    <ul>
      <li>Id: <?php echo $room['id']; ?></li>
      <li>Numero stanza: <?php echo $room['room_number']; ?></li>
      <li>Piano: <?php echo $room['floor']; ?></li>
      <li>Letti: <?php echo $room['beds']; ?></li>
      <li>Data creazione: <?php echo $room['created_at']; ?></li>
    </ul>
  </main>
<?php } else { ?>
  <p>La stanza non esiste</p>
<?php } ?>
