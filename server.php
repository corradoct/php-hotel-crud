<!-- File che si occupa della creazione della query per leggere i dati-->

<?php

// Includo il database
include __DIR__ . '/database.php';

// Creo la query
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

// Se la query ha successo e ci sono risultati creo l'array con i risultati
if ($result && $result->num_rows > 0) {
  $rooms = [];
  while($row = $result->fetch_assoc()) {
  $rooms[] = $row;
  }
} elseif ($result) {  // Se la query ha successo ma non ci sono risultati restituisco un array vuoto
  $rooms = [];
} else {  // Altrimenti stampo un messaggio di errore e blocco l'app
  die("query error");
}

// Chiudo la connessione al database
$conn->close();

?>
