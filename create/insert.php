<!-- File che mostra il form per creare la nuova stanza -->

<?php

// Includo il database
include __DIR__ . '/../database.php';

// Includo l'header
include __DIR__ . '/../partials/header.php';

?>

<!-- Creo il form per la creazione della stanza -->
<main>
  <h2>Stai creando una nuova stanza</h2>

  <form class="" action="<?php echo $basePath . '/create/create.php' ?>" method="post">

    <div>
      <label for="">Numero stanza:</label>
      <input type="text" name="roomNumber" value="">
    </div>

    <div>
      <label for="">Piano:</label>
      <input type="text" name="roomFloor" value="">
    </div>

    <div>
      <label for="">Beds:</label>
      <input type="text" name="roomBeds" value="">
    </div>

    <div>
      <input type="submit" value="Save">
    </div>

  </form>
</main>
