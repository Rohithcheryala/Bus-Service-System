<!DOCTYPE HTML>
<html>

<head>
    <style>
        .hidden{
            display:none;
        }
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>

    <?php
    // define variables and set to empty values
    $Err = $cardnoErr = $passwordErr = "";
    $cardno = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["cardno"])) {
            $cardnoErr = "cardno is required";
        } else {
            $cardno = test_input($_POST["cardno"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST["password"]);
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "bssdb";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        $type = $_POST["type"];
        $cardno = $_POST["cardno"];
        $password = $_POST["password"];
        if ($cardnoErr == "" && $passwordErr == "") {
            $sql = "SELECT cardno, password FROM " . $type . "
            WHERE   cardno = " . $cardno . " AND 
            password = '$password'";
            $query = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                // go to respective home page
                echo "okkkk";
            } else {
                $Err = "card number or password is incorrect";
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

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="type" id="type" value="user" class="hidden">
        <label for="cardno">Card Number</label>
        <input type="text" name="cardno" id="cardno">
        <span class="error">* <?php echo $cardnoErr; ?></span><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <span class="error">* <?php echo $passwordErr; ?></span><br>
        <span class="error" id="err"> <?php echo $Err; ?></span><br>
        <button type="submit">LOG IN</button>
    </form>
   

</body>

</html>