<!-- File che si occupa della connessione al database -->

<?php

// Includo i file base per l'URL e la connessione al database
include __DIR__ . '/env.php';

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
