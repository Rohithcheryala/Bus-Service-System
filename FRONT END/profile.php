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

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $cardno = "120001";
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
    $str .= "<h3>User Profile</h3>
            <p>First Name</p>
            <p>'$firstname'</p>
            <p>Last Name</p>
            <p>'$lastname'</p>
            <p>Email</p>
            <p>'$email'</p>
            <p>Phone Number</p>
            <p> " . "{$phno}" . "</p>
            <p>Balance</p> 
            <p> " . "{$balance}" . "</p>";
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
    <div class="floleft" id="dat">
    <br><br><br>
        
    </div>
    <script>
        var data = '<?php echo $str; ?>';
        alert("ok");
        document.getElementById("dat").innerHTML = "okkk";
    </script>
</body>

</html>