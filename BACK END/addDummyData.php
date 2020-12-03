<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bssdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    // for user table
    $sql = "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120001', '120001', 'user1', 'user1', 'user1@gmail.com', '0000000001', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120002', '120002', 'user2', 'user2', 'user2@gmail.com', '0000000002', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120003', '120003', 'user3', 'user3', 'user3@gmail.com', '0000000003', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120004', '120004', 'user4', 'user4', 'user4@gmail.com', '0000000004', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120005', '120005', 'user5', 'user5', 'user5@gmail.com', '0000000005', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120006', '120006', 'user6', 'user6', 'user6@gmail.com', '0000000006', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120007', '120007', 'user7', 'user7', 'user7@gmail.com', '0000000007', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120008', '120008', 'user8', 'user8', 'user8@gmail.com', '0000000008', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120009', '120009', 'user9', 'user9', 'user9@gmail.com', '0000000009', '10000') ;";
    $sql .= "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('120010', '120010', 'user10', 'user10', 'user10@gmail.com', '0000000010', '10000') ;";
    $query = mysqli_multi_query($conn, $sql);


    // for admin table
    $sql = "INSERT INTO admin(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('130001', '130001', 'admin1', 'admin1', 'admin1@gmail.com', '1000000001', '10000') ;";
    $sql .= "INSERT INTO admin(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('130002', '130002', 'admin2', 'admin2', 'admin2@gmail.com', '1000000002', '10000') ;";
    $sql .= "INSERT INTO admin(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('130003', '130003', 'admin3', 'admin3', 'admin3@gmail.com', '1000000003', '10000') ;";
    $sql .= "INSERT INTO admin(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('130004', '130004', 'admin4', 'admin4', 'admin4@gmail.com', '1000000004', '10000') ;";
    $sql .= "INSERT INTO admin(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('130005', '130005', 'admin5', 'admin5', 'admin5@gmail.com', '1000000005', '10000') ;";
    $query = mysqli_multi_query($conn, $sql);


    // for schedule table
    


    // for revenue table


    // for each bus seperately

    
?>