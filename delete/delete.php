<!-- File che si occupa della creazione della query per cancellare la stanza -->

<?php

// Includo il database
include __DIR__ . '/../database.php';

// Recupero Id e numero stanza
$roomId = $_POST['formId'];
$roomNumber = $_POST['formNumber'];

// Creo la query per l'eliminazione della stanza
$sql = "DELETE FROM `stanze` WHERE `id` = $roomId";
$result = $conn->query($sql);

// Se la query ha successo faccio una redirectory alla homempage inserendo nell'URL il numero della stanza eliminata
if ($result) {
  header('Location: ' . $basePath . '?roomDeleted=' . $roomNumber);
} else {  // Altrimenti stampo un messaggio di errore bloccando l'app
  die("Query error");
}

?>
