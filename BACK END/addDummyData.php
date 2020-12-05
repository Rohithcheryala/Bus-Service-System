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
    $today = '2020-12-05';

    // R1
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '$today', '05:00:00', 'Delhi', '$today','18:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '$today', '21:00:00', 'Mumbai', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '$today', '13:00:00', 'Delhi', '$today','02:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '$today', '05:00:00', 'Mumbai', '$today','18:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '$today', '21:00:00', 'Delhi', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '$today', '13:00:00', 'Mumbai', '$today','02:00:00'  ;";

    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '$today', '21:00:00', 'Delhi', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '$today', '13:00:00', 'Mumbai', '$today','02:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '$today', '05:00:00', 'Delhi', '$today','18:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '$today', '21:00:00', 'Mumbai', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '$today', '13:00:00', 'Delhi', '$today','02:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '$today', '05:00:00', 'Mumbai', '$today','18:00:00'  ;";

    // R2
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B1', '1', 'Hyderabad', '$today', '06:00:00', 'Delhi', '$today','04:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B1', '1', 'Delhi', '$today', '06:00:00', 'Hyderabad', '$today','04:00:00'  ;";
    // $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    // VALUES ('R1B2', '1', 'Hyderabad', '$today', '05:00:00', 'Delhi', '$today','18:00:00'  ;";

    // $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    // VALUES ('R1B2', '1', 'Delhi', '$today', '21:00:00', 'Mumbai', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B2', '1', 'Hyderabad', '$today', '16:00:00', 'Delhi', '$today','14:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B2', '1', 'Delhi', '$today', '16:00:00', 'Hyderabad', '$today','14:00:00'  ;";

    // R3
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Hyderabad', '$today', '05:00:00', 'Goa', '$today','20:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Goa', '$today', '22:00:00', 'Hyderabad', '$today','13:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Hyderabad', '$today', '15:00:00', 'Goa', '$today','06:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Goa', '$today', '08:00:00', 'Hyderabad', '$today','23:00:00'  ;";

    // R4
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Hyderabad', '$today', '08:00:00', 'Chennai', '$today','20:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Chennai', '$today', '22:00:00', 'Hyderabad', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Hyderabad', '$today', '12:00:00', 'Chennai', '$today','00:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Chennai', '$today', '08:00:00', 'Hyderabad', '$today','20:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Hyderabad', '$today', '22:00:00', 'Chennai', '$today','10:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Chennai', '$today', '12:00:00', 'Hyderabad', '$today','00:00:00'  ;";

    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Hyderabad', '$today', '17:00:00', 'Chennai', '$today','05:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '$today', '07:00:00', 'Hyderabad', '$today','19:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Hyderabad', '$today', '21:00:00', 'Chennai', '$today','09:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '$today', '17:00:00', 'Hyderabad', '$today','05:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Hyderabad', '$today', '07:00:00', 'Chennai', '$today','19:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '$today', '21:00:00', 'Hyderabad', '$today','09:00:00'  ;";

    // R5
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '$today', '14:00:00', 'Mumbai', '$today','04:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '$today', '18:00:00', 'Hyderabad', '$today','08:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '$today', '10:00:00', 'Mumbai', '$today','00:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '$today', '14:00:00', 'Hyderabad', '$today','04:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '$today', '18:00:00', 'Mumbai', '$today','08:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '$today', '10:00:00', 'Hyderabad', '$today','00:00:00'  ;";

    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Hyderabad', '$today', '07:00:00', 'Mumbai', '$today','21:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Mumbai', '$today', '23:00:00', 'Hyderabad', '$today','13:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Hyderabad', '$today', '15:00:00', 'Mumbai', '$today','05:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Mumbai', '$today', '07:00:00', 'Hyderabad', '$today','21:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Hyderabad', '$today', '23:00:00', 'Mumbai', '$today','13:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Mumbai', '$today', '15:00:00', 'Hyderabad', '$today','05:00:00'  ;";

    // R6
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B1', '1', 'Hyderabad', '$today', '09:00:00', 'Banglore', '$today','19:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B1', '1', 'Banglore', '$today', '21:00:00', 'Hyderabad', '$today','07:00:00'  ;";

    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B2', '1', 'Hyderabad', '$today', '18:00:00', 'Banglore', '$today','04:00:00'  ;";
    $sql .= "INSERT INTO schedule (cardno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B2', '1', 'Banglore', '$today', '6:00:00', 'Hyderabad', '$today','16:00:00'  ;";
    // for revenue table


    // for each bus seperately

    $numbers = array('R1B1', 'R1B2', 'R2B1', 'R2B2', 'R3B1', 'R4B1', 'R4B2', 'R5B1', 'R5B2', 'R6B1', 'R6B2');
    foreach ($numbers as $value) {
        for ($i=1; $i <= 40; $i++) {
            $sql = "INSERT INTO " . $value . "(tripno, driver, date, seatno, status)
            VALUES ('') ;";
        }
    }
?>