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
    $_SESSION['cardno'] = "";
    $Err = "card number or password is incorrect";
    
    // define variables and set to empty values
    $Err = $fnameErr = $lnameErr = $phnoErr = $emailErr = $passwordErr = "";
    $fname = $lname = $phno = $email = $password = "";
    $result = $row = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "bssdb";
        // ob_start();

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        $type = $_POST["type"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"]; 
        $password = $_POST["password"];
        $phno = $_POST["phno"];
        $balance = 10000;

        if(preg_match("/^([a-zA-Z' ]+)$/",$fname)) {
            $fname = test_input($_POST["fname"]);
        } else {
            $fnameErr = "Must contain alphabets  only";
            ?>
            <html><script>
                document.getElementById('fnameErr').style.display = 'block';
            </script></html>
            <?php
        }

        if(preg_match("/^([a-zA-Z' ]+)$/",$lname)) {
            $lname = test_input($_POST["fname"]);
        } else {
            $lnameErr = "Must contain alphabets  only";
            ?>
            <html><script>
                document.getElementById('lnameErr').style.display = 'block';
            </script></html>
            <?php
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = test_input($_POST["email"]);
            $sql = "SELECT email FROM user
                WHERE email = '$email'";
                $query = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($query);
            if ($rows != 0) {
                $emailErr = "This email is already in use";
            }
        } else {
            $emailErr = "Invalid email ID.";
            ?>
            <html><script>
                document.getElementById('emailErr').style.display = 'block';
            </script></html>
            <?php
        }

        if (strlen($password) < 50) {
            $password = test_input($_POST["password"]);
        } else {
            $passwordErr = "password is too lengthy";
            ?>
            <html><script>
                document.getElementById('passwordErr').style.display = 'block';
            </script></html>
            <?php
        }

        if (preg_match("/^\+?[0-9]+$/", $phno) && strlen($phno) == 10) {
            $phno = test_input($_POST["phno"]);
        } else {
            $phnoErr = "Number must be 10 digits long and contain digits only.";
            ?>
            <html><script>
                document.getElementById('phnoErr').style.display = 'block';
            </script></html>
            <?php
        }


        if ($fnameErr == "" && $lnameErr == "" && $phnoErr == "" && $emailErr == "" && $passwordErr == "" ) {
            $sql = "SELECT cardno  
                FROM " . $type . "  
                ORDER BY cardno DESC  
                LIMIT 1;  ";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($query);
            $cardno = $row[0] + 1;
            ?>
            <html><script type="text/javascript">
            alert(<?php echo "Card Number : '$cardno'" ;?>);
            </script><html>
            <?php

            $sql = "INSERT INTO user(cardno,password,firstname,lastname,email,phno,balance)
            VALUES ('$cardno', '$password', '$fname', '$lname', '$email', '$phno', '10000') ;";
            $query = mysqli_query($conn, $sql);
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
            <a class="active">Home</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    &emsp;

    <div class="flonext" style="margin-left: 340px;padding-left: 90px;padding-right: 0px;width:45%">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

            <h4>Sign up </h4>
            <input type="text" name="type" id="type" value="user" class="hidden" readonly>
            <label class="custom" for="fname">First Name</label>
            <input type="text" name="fname" id="fname" required><br>
            <span class="error" id="fnameErr">* <?php echo $fnameErr; ?></span><br>

            <label class="custom" for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" required><br>
            <span class="error" id="lnameErr">* <?php echo $lnameErr; ?></span><br>

            <label class="custom" for="email">Email</label>
            <input type="email" name="email" id="email" required><br>
            <span class="error" id="emailErr">* <?php echo $emailErr; ?></span><br>

            <label class="custom" for="password">Password</label>
            <input type="password" name="password" id="password" required><br><br>
            <span class="error" id="passwordErr">* <?php echo $passwordErr; ?></span><br>

            <label class="custom" for="phno">Phone</label>
            <input type="number" name="phno" id="phno" required><br>
            <span class="error" id="phnoErr">* <?php echo $phnoErr; ?></span><br>


            <button type="submit">submit</button>&nbsp&nbsp&nbsp
            <button type="reset">reset</button>


        </form>
    </div>

</body>

</html>