<!-- File che si occupa della creazione della query per la creazione della nuova stanza -->

<?php

// Includo il database
include __DIR__ . '/../database.php';

// Recupero i dati che mi servono della stanza
$roomNumber = $_POST['roomNumber'];
$roomFloor = $_POST['roomFloor'];
$roomBeds = $_POST['roomBeds'];

// Creo la query
$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES ($roomNumber, $roomFloor, $roomBeds, NOW(), NOW())";
$result = $conn->query($sql);

// Se la query ha successo faccio una redirectory alla homempage inserendo nell'URL il numero della stanza modificata
if ($result) {
  header('Location: ' . $basePath . '?roomCreated=' . $roomNumber);
} else {  // Altrimenti stampo un messaggio di errore bloccando l'app
  die("Query error");
}

?>
