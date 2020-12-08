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
    session_start();
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
        $_SESSION['fromplace']=$fromplace;
        $toplace = $_POST['toplace'];
        $_SESSION['toplace']=$toplace;
        $date = date('Y-m-d', strtotime($_POST['date']));
        $_SESSION['date']=$date

        if (preg_match("/^([a-zA-Z' ]+)$/", $fromplace)) {
            $fname = test_input($_POST["fplace"]);
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
            
            $sql = "SELECT tripno,fromplace, toplace, fromtime, totime
            FROM schedule 
            WHERE LOWER(fromplace) = LOWER('$fromplace') AND LOWER(toplace) = LOWER('$toplace') AND fromdate = '$date' ;";
            $query = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($query);
            if ($rows != 0) {
                $str = "";
                $time = "";
                while ($row = mysqli_fetch_row($result)) {
                    $str += "<tr>
                                <td>".$row["tripno"]."</td>
                                <td>" . $row["fromplace"] . "</td>
                                <td>" . $row["fromtime"] . "</td>
                                <td>" . $row["toplace"] . "</td>
                                <td>" . $row["totime"] . "</td>
                                <td><input type='radio' name='tripno' value=".$row["tripno"]."></td>
                             </tr>";
                    $time += "<option value=".$row["fromtime"].">";
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
            <label class="custom" for="from">From Place</label>
            <input type="text" id="from" name="fplace" list="fplaces">
            <datalist id="fplaces">
                <option value="Mumbai" name="Mumbai">
                <option value="Delhi" name="Delhi">
                <option value="Hyderabad" name="Hyderabad">
                <option value="Goa" name="Goa">
                <option value="Chennai" name="chennai">
                <option value="Banglore" name="Banglore">
            </datalist>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="custom" for="to">To Place</label>
            <input type="text" id="to" name="toplace" list="toplaces">
            <datalist id="toplaces">
                <option value="Mumbai" name="Mumbai">
                <option value="Delhi" name="Delhi">
                <option value="Hyderabad" name="Hyderabad">
                <option value="Goa" name="Goa">
                <option value="Chennai" name="Chennai">
                <option value="Banglore" name="Banglore">
            </datalist>
            <br>
            <label class="custom" for="date">Date</label>
            <input type="date" id="date" name="date"><br>
            <button type="submit">search</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset">reset</button>
        </form>
    </div>
    <form action="bus.php" method="post" style="margin:0px 150px;">
    <table style="width:60%;margin:0px;">
        <tr>
            <th>Trip no</th>
            <th>From</th>
            <th>Departure time</th>
            <th>To</th>
            <th>Reaching time</th>
            <th>Selection</th>
        </tr>
        <div id="data">

        </div>
        
    </table>
    
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