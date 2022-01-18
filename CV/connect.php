<?php
$servername = "localhost:3305 ";
$username = "root";
$password = "";
$database = "resume";

// Creation de la connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Checking de la connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>