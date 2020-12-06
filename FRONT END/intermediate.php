<?php
    $fromplace = "";
    $toplace = "";
    $fromtime = "";
    $date = "";

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
            WHERE fromplace = '$fromplace' AND toplace = '$toplace' AND $date = " . $date . "";
    $query = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($query);
    if ($rows == 1) {
        $row = mysqli_fetch_row($query);
        $busno = $row[0];
        $tripno = $row[1];
        //rediect some where 
        // we got variables
    }
?>