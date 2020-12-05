<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bssdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    $type = $_POST["type"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phno = $_POST["phno"];
    $sql = "SELECT cardno  
            FROM " . $type . "  
            ORDER BY cardno DESC  
            LIMIT 1;  ";
    $cardno = mysqli_query($conn, $sql) + 1;

    $sql = "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('$cardno', '$password', '$firstname', '$lastname', '$email', '$phno', '10000') ;";
    $query = mysqli_query($conn, $sql);
?>