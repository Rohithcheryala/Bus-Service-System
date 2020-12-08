<?php
    ob_start();
    session_start();


    $fromplace = $_SESSION['fromplace'];
    $toplace = $_SESSION['toplace'];
    $fromtime = "";
    $date = $_SESSION['date'];
    $busno = $_SESSION['busno'];
    $tripno = $_SESSION['tripno'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bssdb";

    //$i = 13;
   // echo $_POST[$i];
    $arr = array();
    $arr[0]=0;
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    for($i=1;$i<=40;$i++){
        //echo ($_POST[$i]);
        if (isset($_POST[$i])==1){
            $arr[$i]=1;
        }
        else{
            $arr[$i]=0;
        }
    }

    $count = 0;
    $seats = "";
    for($i=1;$i<=40;$i++){
        if ($arr[$i]==1){
            $count+=1;
            $sql = "UPDATE .$busno. SET status=1 WHERE tripno='.$tripno.' AND date='.$date.' AND seatno='.$i.'; ";
            $query = mysqli_query($conn,$sql);
            $seats .= " $i";
        }
    }

    $_SESSION['count'] = $count;
    $_SESSION['seats'] = $seats;
    //echo $arr[5];
    //echo $arr[13];
    //echo $arr[14];
    //$sql = "SELECT busno,tripno,fromplace,fromtime,toplace,totime 
      //      FROM schedule 
        //    WHERE LOWER(fromplace) = LOWER('$fromplace') AND LOWER(toplace) = LOWER('$toplace') AND fromdate = '$date' ;";
    #echo $sql;
    //$query = mysqli_query($conn, $sql);

    //$rows = mysqli_num_rows($query);
    #echo $rows;
    //if ($rows == 1) {
      //  $row = mysqli_fetch_row($query);
       // $busno = $row[0];
        //$tripno = $row[1];
        //rediect some where 
        // we got variables
    //}
    #echo $busno;
    #echo $tripno;
?>