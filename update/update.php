<!-- File che si occupa della creazione della query per la modifica dei dati -->

<?php

// Includo il database
include __DIR__ . '/../database.php';

// Recupero i dati che mi servono della stanza
$roomId = $_POST['roomId'];
$roomNumber = $_POST['roomNumber'];
$roomFloor = $_POST['roomFloor'];
$roomBeds = $_POST['roomBeds'];

// Creo la query
$sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `floor` = $roomFloor, `beds` = $roomBeds, `created_at` = NOW() WHERE `id` = $roomId";
$result = $conn->query($sql);

// Se la query ha successo faccio una redirectory alla homempage inserendo nell'URL il numero della stanza modificata
if ($result) {
  header('Location: ' . $basePath . '?roomUpdated=' . $roomNumber);
} else {  // Altrimenti stampo un messaggio di errore bloccando l'app
  die("Query error");
}

?>
