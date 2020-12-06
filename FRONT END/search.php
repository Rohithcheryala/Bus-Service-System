<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    ob_start();

    $fromplaceErr = $toplaceErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "bssdb";
        // ob_start();

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        $fromplace = $_POST['fplace'];
        $toplace = $_POST['toplace'];
        $date = $_POST['date'];

        if (preg_match("/^([a-zA-Z' ]+)$/", $fromplace)) {
            $fname = test_input($_POST["fromplace"]);
        } else {
            $fnameErr = "Must contain alphabets  only";
    ?>
            <html>
            <script>
                document.getElementById('fromplaceErr').style.display = 'block';
            </script>

            </html>
        <?php
        }

        if (preg_match("/^([a-zA-Z' ]+)$/", $toplace)) {
            $lname = test_input($_POST["toplace"]);
        } else {
            $lnameErr = "Must contain alphabets  only";
        ?>
            <html>
            <script>
                document.getElementById('toplaceErr').style.display = 'block';
            </script>

            </html>
        <?php
        }

        if ($fromplaceErr == "" && $toplaceErr == "") {
            $sql = "SELECT cardno  
                FROM " . $type . "  
                ORDER BY cardno DESC  
                LIMIT 1;  ";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($query);
            $cardno = $row[0] + 1;
        ?>
            <html>
            <script type="text/javascript">
                alert(<?php echo "Card Number : '$cardno'"; ?>);
            </script>
            <html>
            <?php

            $sql = "SELECT fromplace, toplace, fromtime, totime
            FROM schedule 
            WHERE LOWER(fromplace) = LOWER('$fromplace') AND LOWER(toplace) = LOWER('$toplace') AND fromdate = '$date' ;";
            $query = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($query);
            if ($rows != 0) {
                $str = "";
                $time = "";
                while ($row = mysqli_fetch_row($result)) {
                    $str += "<tr>
                                <td>" . $row["fromplace"] . "</td>
                                <td>" . $row["fromtime"] . "</td>
                                <td>" . $row["toplace"] . "</td>
                                <td>" . $row["totime"] . "</td>
                             </tr>";
                    $time += "<option value=".$row["fromtime"].">"
                }
            ?>
                <html>
                <script>
                    document.getElementById("data").innerHTML = <?php '$str' ?>
                    document.getElementById("buses").innerHTML=<?php '$time'?>
                </script>

                </html>
    <?php
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
            <a class="active" href="homepage.php">Home</a>
            <a>My transactions</a>

            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="search">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="from">From Place</label>
            <input type="text" id="from" name="fplace" list="fplaces">
            <datalist id="fplaces">
                <option value="Mumbai">
                <option value="Delhi">
                <option value="Hyderabad">
                <option value="Goa">
                <option value="Chennai">
                <option value="Banglore">
            </datalist>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="to">To Place</label>
            <input type="text" id="to" name="toplace" list="toplaces">
            <datalist id="toplaces">
                <option value="Mumbai">
                <option value="Delhi">
                <option value="Hyderabad">
                <option value="Goa">
                <option value="Chennai">
                <option value="Banglore">
            </datalist>
            <br>
            <label for="date">Date</label>
            <input type="date"><br>
            <button type="submit">search</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset">reset</button>
        </form>
    </div>
    <table style="width:100%">
        <tr>
            <th>From</th>
            <th>Departure time</th>
            <th>To</th>
            <th>Reaching time</th>
        </tr>
        <div id="data">

        </div>
        
    </table>
    <form action="bus.php" method="post">
        <label class="custom" for="buses">Select bus time</label>
        <datalist id="buses">
        </datalist>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<!-- 
"""
<form>
    for buses{
    <label for="$busno">$busno</label>
    <input type="radio" name="bus" id=$busno><br> }
    <button type="submit">submit</button>
</form> 
""" -->