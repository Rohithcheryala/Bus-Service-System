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
    if ($query) {
        echo 1;
      } else {
        echo "user";
        echo mysqli_error($conn);
      }
    // $sql = null;
    $conn = mysqli_connect($servername, $username, $password, $db);

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
    if ($query) {
        echo 1;
      } else {
        echo "admin";
        echo mysqli_error($conn);
      }
    // $sql = null;
    $conn = mysqli_connect($servername, $username, $password, $db);
    // for schedule table
    $today = '2020-12-05';

    // R1
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '2020-12-05', '05:00:00', 'Delhi', '2020-12-06','18:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '2020-12-06', '21:00:00', 'Mumbai', '2020-12-08','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '2020-12-08', '13:00:00', 'Delhi', '2020-12-10','02:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '2020-12-10', '05:00:00', 'Mumbai', '2020-12-11','18:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Mumbai', '2020-12-11', '21:00:00', 'Delhi', '2020-12-13','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B1', '1', 'Delhi', '2020-12-13', '13:00:00', 'Mumbai', '2020-12-15','02:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    // $sql = null;
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '2020-12-05', '21:00:00', 'Delhi', '2020-12-07','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '2020-12-07', '13:00:00', 'Mumbai', '2020-12-09','02:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '2020-12-09', '05:00:00', 'Delhi', '2020-12-10','18:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '2020-12-10', '21:00:00', 'Mumbai', '2020-12-12','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Mumbai', '2020-12-12', '13:00:00', 'Delhi', '2020-12-14','02:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R1B2', '1', 'Delhi', '2020-12-14', '05:00:00', 'Mumbai', '2020-12-15','18:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    
    // R2
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B1', '1', 'Hyderabad', '2020-12-05', '06:00:00', 'Delhi', '2020-12-06','04:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B1', '1', 'Delhi', '2020-12-06', '06:00:00', 'Hyderabad', '2020-12-07','04:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);
    // $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    // VALUES ('R1B2', '1', 'Hyderabad', '2020-12-05', '05:00:00', 'Delhi', '2020-12-05','18:00:00'  ;";

    // $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    // VALUES ('R1B2', '1', 'Delhi', '2020-12-05', '21:00:00', 'Mumbai', '2020-12-05','10:00:00'  ;";
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B2', '1', 'Hyderabad', '2020-12-05', '16:00:00', 'Delhi', '2020-12-06','14:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R2B2', '1', 'Delhi', '2020-12-06', '16:00:00', 'Hyderabad', '2020-12-07','14:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // R3
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Hyderabad', '2020-12-05', '05:00:00', 'Goa', '2020-12-05','20:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '2', 'Goa', '2020-12-05', '22:00:00', 'Hyderabad', '2020-12-06','13:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Hyderabad', '2020-12-06', '15:00:00', 'Goa', '2020-12-07','06:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R3B1', '1', 'Goa', '2020-12-07', '08:00:00', 'Hyderabad', '2020-12-07','23:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // R4
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Hyderabad', '2020-12-05', '08:00:00', 'Chennai', '2020-12-05','20:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '2', 'Chennai', '2020-12-05', '22:00:00', 'Hyderabad', '2020-12-06','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Hyderabad', '2020-12-06', '12:00:00', 'Chennai', '2020-12-07','00:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Chennai', '2020-12-07', '08:00:00', 'Hyderabad', '2020-12-07','20:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '2', 'Hyderabad', '2020-12-07', '22:00:00', 'Chennai', '2020-12-08','10:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B1', '1', 'Chennai', '2020-12-08', '12:00:00', 'Hyderabad', '2020-12-09','00:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Hyderabad', '2020-12-05', '17:00:00', 'Chennai', '2020-12-06','05:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '2020-12-06', '07:00:00', 'Hyderabad', '2020-12-06','19:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '2', 'Hyderabad', '2020-12-06', '21:00:00', 'Chennai', '2020-12-07','09:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '2020-12-07', '17:00:00', 'Hyderabad', '2020-12-07','05:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '2', 'Hyderabad', '2020-12-07', '07:00:00', 'Chennai', '2020-12-08','19:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R4B2', '1', 'Chennai', '2020-12-08', '21:00:00', 'Hyderabad', '2020-12-08','09:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // R5
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '2020-12-05', '14:00:00', 'Mumbai', '2020-12-06','04:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '2020-12-06', '18:00:00', 'Hyderabad', '2020-12-07','08:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '2020-12-07', '10:00:00', 'Mumbai', '2020-12-08','00:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '2020-12-08', '14:00:00', 'Hyderabad', '2020-12-09','04:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Hyderabad', '2020-12-09', '18:00:00', 'Mumbai', '2020-12-10','08:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B1', '1', 'Mumbai', '2020-12-10', '10:00:00', 'Hyderabad', '2020-12-11','00:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Hyderabad', '2020-12-05', '07:00:00', 'Mumbai', '2020-12-05','21:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '2', 'Mumbai', '2020-12-05', '23:00:00', 'Hyderabad', '2020-12-06','13:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Hyderabad', '2020-12-06', '15:00:00', 'Mumbai', '2020-12-07','05:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Mumbai', '2020-12-07', '07:00:00', 'Hyderabad', '2020-12-07','21:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '2', 'Hyderabad', '2020-12-07', '23:00:00', 'Mumbai', '2020-12-08','13:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R5B2', '1', 'Mumbai', '2020-12-08', '15:00:00', 'Hyderabad', '2020-12-09','05:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // R6
    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B1', '1', 'Hyderabad', '2020-12-05', '09:00:00', 'Banglore', '2020-12-05','19:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B1', '2', 'Banglore', '2020-12-05', '21:00:00', 'Hyderabad', '2020-12-06','07:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B2', '1', 'Hyderabad', '2020-12-05', '18:00:00', 'Banglore', '2020-12-06','04:00:00')  ;";
    $sql .= "INSERT INTO schedule (busno, tripno, fromplace, fromdate, fromtime, toplace, todate, totime)
    VALUES ('R6B2', '1', 'Banglore', '2020-12-06', '06:00:00', 'Hyderabad', '2020-12-06','16:00:00')  ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // for revenue table


    // for each bus seperately

    //R1B1
    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kyle', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kyle', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'John', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'John', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kyle', '2020-12-08', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kyle', '2020-12-08', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'John', '2020-12-10', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'John', '2020-12-10', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kyle', '2020-12-11', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kyle', '2020-12-11', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'John', '2020-12-13', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'John', '2020-12-13', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R1B2
    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Gopal', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Gopal', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Darshi', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Darshi', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Gopal', '2020-12-09', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Gopal', '2020-12-09', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Darshi', '2020-12-10', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Darshi', '2020-12-10', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Gopal', '2020-12-12', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Gopal', '2020-12-12', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Darshi', '2020-12-14', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R1B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Darshi', '2020-12-14', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R2B1
    $sql = "INSERT INTO R2B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Madhu', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R2B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Madhu', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R2B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Sri', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R2B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Sri', '2020-12-06', '$i', '0') ;";
    }
    // to be added many more times!!!



    
    //R2B2
    $sql = "INSERT INTO R2B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Ram', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R2B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Ram', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R2B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Krishna', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R2B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Krishna', '2020-12-06', '$i', '0') ;";
    }




    //R3B1
    $sql = "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Mohan', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Mohan', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Ishith', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Ishith', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Mohan', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Mohan', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Ishith', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R3B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Ishith', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R4B1
    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-08', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-08', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R4B2
    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Kannayya', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Kannayya', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Praveen', '2020-12-08', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R4B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Praveen', '2020-12-08', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R5B1
    $sql = "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Manohar', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Manohar', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Vishnu', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Vishnu', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Manohar', '2020-12-07', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Manohar', '2020-12-07', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);
    




    //R5B2
    $sql = "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Manoj', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Manoj', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Arjun', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Arjun', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Manoj', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R5B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Manoj', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);





    //R6B1
    $sql = "INSERT INTO R6B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Ankit', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R6B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Ankit', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R6B1 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Dheeraj', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R6B1 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Dheeraj', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);
    // to be added many more times!!!





    //R6B2
    $sql = "INSERT INTO R6B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Mahesh', '2020-12-05', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R6B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Mahesh', '2020-12-05', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "INSERT INTO R6B2 (tripno, driver, date, seatno, status)
    VALUES ('1', 'Rajesh', '2020-12-06', '1', '0') ;";
    for ($i=2; $i <= 40; $i++) {
        $sql .= "INSERT INTO R6B2 (tripno, driver, date, seatno, status)
                VALUES ('1', 'Rajesh', '2020-12-06', '$i', '0') ;";
    }
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);
    // $numbers = array('R1B1', 'R1B2', 'R2B1', 'R2B2', 'R3B1', 'R4B1', 'R4B2', 'R5B1', 'R5B2', 'R6B1', 'R6B2');
    // foreach ($numbers as $value) {
    //     for ($i=1; $i <= 40; $i++) {
    //         $sql = "INSERT INTO " . $value . "(tripno, driver, date, seatno, status)
    //         VALUES ('1', '', '', '$i', '0') ;";
    //     }
    // }

    // data for employees table
    $sql = "INSERT INTO employees (employeename, salary)
    VALUES ('Kyle','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('John','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Gopal','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Dharshi','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Madhu','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Sri','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Ram','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Krishna','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('MOhan','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Ishith','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Kannayya','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Praveen','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Rakshith','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Don','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Manohar','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Vishnu','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Manoj','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Arjun','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Ankit','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Dheeraj','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Mahesh','50000') ;";
    $sql .= "INSERT INTO employees (employeename, salary)
    VALUES ('Rajesh','50000') ;";
    $query = mysqli_multi_query($conn, $sql);
    $conn = mysqli_connect($servername, $username, $password, $db);

    // transaction table
    $sql = "INSERT INTO transaction(transactionID,cardno,busno,tripno,seatno,fromplace,toplace,fromdate)
    VALUES ('90000001','120001','R1B1','1','10','Mumbai','Delhi','2020-12-05') ;";
    $sql .= "INSERT INTO transaction(transactionID,cardno,busno,tripno,seatno,fromplace,toplace,fromdate,todate)
    VALUES ('90000002','120002','R1B1','1','20','Mumbai','Delhi','2020-12-05') ;";
    $query = mysqli_multi_query($conn, $sql);
    if ($query) {
        echo 1;
      } else {
        echo "r1";
        echo mysqli_error($conn);
      }
    $conn = mysqli_connect($servername, $username, $password, $db);

    // revenue table


    // busfare table
    $sql = "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Mumbai','Delhi','2000');";
    $sql .= "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Delhi','Hyderabad','3000');";
    $sql .= "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Hyderabad','Chennai','1500');";
    $sql .= "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Hyderabad','Mumbai','3500');";
    $sql .= "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Hyderabad','Banglore','1500');";
    $sql .= "INSERT INTO busfare(fromplace,toplace,fare)
    VALUES ('Hyderabad','Goa','4000');";
    $query = mysqli_multi_query($conn, $sql);
?>