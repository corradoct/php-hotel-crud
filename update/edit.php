<!-- File che mostra il form per modificare i dati -->

<?php

// Includo la query
include __DIR__ . '/server.php';

// Includo l'header
include __DIR__ . '/../partials/header.php';

?>

<!-- Creo il form per la modifica della stanza -->
<main>
  <h2>Stai modificando la stanza numero: <?php echo $room['room_number']; ?></h2>

  <form class="" action="<?php echo $basePath . '/update/update.php' ?>" method="post">

    <div>
      <input type="hidden" name="roomId" value="<?php echo $room['id']; ?>">
    </div>

    <div>
      <label for="">Numero stanza:</label>
      <input type="text" name="roomNumber" value="<?php echo $room['room_number']; ?>">
    </div>

    <div>
      <label for="">Piano:</label>
      <input type="text" name="roomFloor" value="<?php echo $room['floor']; ?>">
    </div>

    <div>
      <label for="">Beds:</label>
      <input type="text" name="roomBeds" value="<?php echo $room['beds']; ?>">
    </div>

    <div>
      <input type="submit" value="Save">
    </div>

  </form>
</main>
