<?php
$LOG_NAME = $_SESSION["CLIENT_NAME"];
$LOG_IP = $_SERVER["REMOTE_ADDR"];
$LOG_DATE = date('Y-m-d');  // 2012-10-11;
// Heure pas bonnes, mise à jour avec +2
$heure = date('H');
$heure = $heure + 2;
$minute_sec = date('is');
$LOG_HEURE = $heure.$minute_sec;

$sql = "INSERT INTO LOG_TABLE (LOG_NAME, LOG_IP, LOG_DATE, LOG_HEURE, LOG_ONGLET) VALUES ('$LOG_NAME', '$LOG_IP', '$LOG_DATE', '$LOG_HEURE', '$LOG_ONGLET');";

if ($conn->query($sql) === TRUE) {
  $debug = 0 ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>