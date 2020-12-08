<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php

    ob_start();
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bssdb";
    $conn = mysqli_connect($servername, $username, $password, $db);

    // $busno = $_POST['busno'];
    // $date = $_POST['date'];
    // $tripno = $_POST['tripno'];
    // $fromplace = $_POST["fromplace"];
    // $fromtime = $_POST["fromtime"];
    // $toplace = $_POST["toplace"];
    $date = $_SESSION['date'];
    $tripno = $_POST['tripno'];
    $from = $_SESSION['fromplace'];
    $to = $_SESSION['toplace'];
    $queryi = mysqli_query($conn,"SELECT busno FROM schedule WHERE fromdate='.$date.' AND tripno='.$tripno.' AND fromplace='.($from.' AND toplace='.$to.';");
    $rowi = mysqli_fetch_row($queryi);
    $busno = $rowi[0];
    
    $str = "";
    $sql = "SELECT seatno, status
            FROM " . $busno . "
            WHERE date = '$date' AND tripno = " . $tripno . " ;"; //todo order by must be added 
    $query = mysqli_query($conn, $sql);
    for ($rows = 0; $rows <= 9; $rows++) {
        for ($no = 1; $no <= 4; $no++) {
            $seatno = $rows * 4 + $no;
            $row = mysqli_fetch_row($query);
            if ($row[1] === 1){
                $str .= "<input style='width:20px;' type='checkbox' id='$seatno' name='$seatno' disabled unchecked>
                            <label style='display:inline-block;width:20px; for='$seatno>$seatno</label>&nbsp&nbsp&nbsp";
            } else {
                $str .= "<input style='width:20px;' type='checkbox' id='$seatno' name='$seatno' >
                            <label style='display:inline-block;width:20px;'for='$seatno'>$seatno</label>&nbsp&nbsp&nbsp";
            }
        }
        $str .= "<br>";
    }
    // echo $str;
    ?>
    <div class="fix">
        <div class="header">
            <div class="log">
                <img src="logo_2.png" width=80px height=70px>
            </div>
            <div class="left">
                <h1>BUS RESERVATION SYSTEM<sup>TM</sup></h1>
            </div>
        </div>
        <div class="topnav">
            <a class="active">Home</a>
            <a href="transactions.php">Transactions</a>
            <a href="profile.php">Profile</a>
            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft" style="margin-left:200px;border:2px solid black;">
        <form action="intermediate.php" method="POST">
            <div class="bus">
                <h3 style="margin:5px 120px">FRONT </h4>
                    <div id="data">
                    <?php echo $str; ?>
                        
                    </div>
                    <!-- <script>
                        document.getElementById("data").innerHTML = "<?php echo $str; ?>";
                    </script>  -->
                    <!--<input type="checkbox" id="1" disabled unchecked>
                    <label for="1">1</label>

                    <input type="checkbox" id="2">
                    <label for="2">2</label> &nbsp&nbsp&nbsp
                    <input type="checkbox" name="seatno" id="3" value="seatno">
                    <label for="3">3</label><br>
                    -->

            </div>
            <button type="submit" style="margin: 10px 210px">submit</button>
            <button type="reset" style="margin:10px 0px">reset</button>
        </form>
    </div>
</body>

</html>