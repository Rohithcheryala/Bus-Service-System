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

// Create database
$sql = "CREATE DATABASE bssdb";
$query = mysqli_query($conn, $sql);
if ($query) {
  echo "Database created successfully".$query;
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>