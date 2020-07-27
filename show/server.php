<!-- File che si occupa della creazione della query per leggere i dati-->

<?php

// Includo il database
include __DIR__ . '/../database.php';

// Recupero l'Id della stanza
$roomId = $_GET['id'];

// Creo la query
$sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
$result = $conn->query($sql);

// Se la query ha successo e ci sono risultati li stampo
if ($result && $result->num_rows > 0) {
  $room = $result->fetch_assoc();
} elseif ($result) { // Se la query ha successo ma non ci sono risultati restitutisco un array vuoto
  $rooms = [];
} else { // Altrimenti stampo un messaggio di errore
  die("query error");
}

// Chiudo la connessione
$conn->close();

?>
