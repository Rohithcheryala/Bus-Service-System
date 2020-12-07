<?php
    $fromplace = "Hyderabad";
    $toplace = "Delhi";
    $fromtime = "";
    $date = "2020-12-05";

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

    $sql = "SELECT busno,tripno,fromplace,fromtime,toplace,totime 
            FROM schedule 
            WHERE LOWER(fromplace) = LOWER('$fromplace') AND LOWER(toplace) = LOWER('$toplace') AND fromdate = '$date' ;";
    echo $sql;
    $query = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($query);
    echo $rows;
    if ($rows == 1) {
        $row = mysqli_fetch_row($query);
        $busno = $row[0];
        $tripno = $row[1];
        //rediect some where 
        // we got variables
    }
    echo $busno;
    echo $tripno;
?>