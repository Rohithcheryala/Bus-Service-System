<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bssdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// create user table
$sql = "CREATE TABLE user (
    cardno INT(10) NOT NULL UNIQUE, 
    password VARCHAR(15) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phno INT(10) NOT NULL UNIQUE,
    balance INT(6) NOT NULL
    )";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo 1;
  } else {
    echo mysqli_error($conn);
  }


// create admin table
$sql = "CREATE TABLE admin (
    cardno INT(10) NOT NULL UNIQUE, 
    password VARCHAR(15) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phno INT(10) NOT NULL UNIQUE,
    balance INT(6) NOT NULL
    )";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo 1;
  } else {
    echo mysqli_error($conn);
  }


// create schedule table
$sql = "CREATE TABLE schedule (
    busno VARCHAR(10) NOT NULL, 
    tripno INT(2) NOT NULL,
    -- date INT(8) NOT NULL, -- yyyy-mm-dd 
    -- day INT(2) NOT NULL, -- dd is the format , its not like 'monday' or 'tuesday'.
    fromplace VARCHAR(30) NOT NULL,
    fromdate int(8) NOT NULL,
    fromtime INT(6) NOT NULL,
    toplace VARCHAR(30) NOT NULL,
    todate int(8) NOT NULL,
    totime INT(6) NOT NULL
    )";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo 1;
  } else {
    echo mysqli_error($conn);
  }


// create Per bus table  --> must be executed with diff names
$busno = "R1B1";
$sql = "CREATE TABLE $busno (
    tripno INT(2) NOT NULL,
    driver VARCHAR(30) NOT NULL,
    date INT(8) NOT NULL, -- yyyy-mm-dd 
    seatno INT(2) NOT NULL,
    status INT(1) NOT NULL
    )";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo 1;
  } else {
    echo mysqli_error($conn);
  }


// create revenue table
$sql = "CREATE TABLE revenue (
    busno VARCHAR(10) NOT NULL, 
    tripno INT(2) NOT NULL,
    fuel INT(6) NOT NULL, -- lets keep them negative because its outgoing 
    maintenance INT(6) NOT NULL, -- lets keep them negative because its outgoing 
    income INT(2) NOT NULL, -- through tickets
    date INT(8) NOT NULL -- yyyy-mm-dd 
    )";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo 1;
  } else {
    echo mysqli_error($conn);
  }


// create transaction table
$sql = "CREATE TABLE transaction(
    transactionID INT(8) NOT NULL,
    busno VARCHAR(10) NOT NULL,
    tripno INT(2) NOT NULL,
    seatno INT(2) NOT NULL,
    fromplace VARCHAR(30) NOT NULL,
    toplace VARCHAR(30) NOT NULL)";
$query = mysqli_query($conn, $sql);
if ($query) {
  echo 1;
  } else {
    echo mysqli_error($conn);
  }
// closing connection
mysqli_close($conn);
?>