<?php
include __DIR__ . '/database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  // output data of each row
  $rooms = [];
  while($row = $result->fetch_assoc()) {
  $rooms[] = $row;
  }
} elseif ($result) {
  $rooms = [];
} else {
  die("query error");
}

$conn->close();

?>
