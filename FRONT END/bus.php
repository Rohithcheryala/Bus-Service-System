<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
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
    $busno = 'R1B1';
    $date = '2020-12-05';
    $tripno = 1;

    $str = "";
    $sql = "SELECT seatno, status
            FROM " . $busno . "
            WHERE date = " . $date . " AND tripno = " . $tripno . " ;"; //todo order by must be added 
    echo $sql;
    $query = mysqli_query($conn, $sql);
    for ($row = 1; $row = 10; $row++) {
        for ($no = 1; $no = 4; $no++) {
            $seatno = $row * 4 + $no;
            $row = mysqli_fetch_row($query);
            echo $row;
            // if ($row[1] == 1){
            //     $str .= "<input type='checkbox' id='$seatno' name='$seatno' disabled unchecked>
            //                 <label for='$seatno>'$seatno'</label>";
            // } else {
            //     $str .= "<input type='checkbox' id='$seatno' name='$seatno' >
            //                 <label for='$seatno>'$seatno'</label>";
            // }
            // $str .= "<br>";
        }
    }
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
            <a>Transactions</a>
            <a>Profile</a>
            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft" style="margin-left:200px;border:2px solid black;">
        <form>
            <div class="bus">
                <h3 style="margin:5px 100px">FRONT </h4>
                    <div id="data">

                        
                    </div>
                    <script>
                        document.getElementById("data").innerHTML = "<?php echo $str; ?>";
                    </script>
                    <!-- <input type="checkbox" id="1" disabled unchecked>
                    <label for="1">1</label>

                    <input type="checkbox" id="2">
                    <label for="2">2</label> &nbsp&nbsp&nbsp
                    <input type="checkbox" name="seatno" id="3" value="seatno">
                    <label for="3">3</label><br> -->


            </div>
            <button type="submit" style="margin: 10px 210px">submit</button>
            <button type="reset" style="margin:10px 0px">reset</button>
        </form>
    </div>
</body>

</html>