<?php
include __DIR__ . '/../database.php';

$roomId = $_GET['id'];


$sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  // output data of each row
  $room = $result->fetch_assoc();


} elseif ($result) {
  $rooms = [];
} else {
  die("query error");
}

$conn->close();

?>
