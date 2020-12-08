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

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $cardno = $_SESSION['cardno'];
    $sql = "SELECT password,firstname,lastname,email,phno,balance
                        FROM user 
                        WHERE cardno = " . $cardno . "";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($query);

    $password = $row[0];
    $firstname = $row[1];
    $lastname = $row[2];
    $email = $row[3];
    $phno = $row[4];
    $phno = "{$phno}";
    $balance = $row[5];
    // echo $firstname . " " . $lastname . " " . $email . " " . $phno . " " . $balance . " " . $password;
    $str = "";
    // echo "1-".$str;
    $str .= "<h3 style='margin:10px 250px;'>User Profile</h3>
            
            <table>
            <tr>
                <td>Card No</td>
                <td>$cardno</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>$firstname</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>$lastname</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>" . "{$phno}" . "</td>
            </tr>
            <tr>
                <td>Balance</td> 
                <td>" . "{$balance}" . "</td>
            </tr>
            </table>";
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
            <a href="search.php">Home</a>
            <a href="transactions_user.php">Transactions</a>
            <a class="active">Profile</a>
            <a class="logout" href="index.php">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br> 
    <div class="floleft" id="dat"style="margin:10px 250px;">
    <br><br><br>
        <?php echo $str; ?>
    </div>
    <script>
        var data = '<?php echo $str; ?>';
        alert("ok");
        document.getElementById("dat").innerHTML = data;
    </script>
</body>

</html>