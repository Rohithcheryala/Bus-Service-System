<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// drop database
$sql = "DROP DATABASE bssDB";
$query = mysqli_query($conn, $sql);
?>