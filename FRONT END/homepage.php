<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    ?>
    <?php
    // define variables and set to empty values
    $Err = $cardnoErr = $passwordErr = "";
    $cardno = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "bssdb";
        ob_start();

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        $type = $_POST["type"];
        $cardno = $_POST["cardno"];
        $password = $_POST["password"];

        if (preg_match("/^\+?[0-9]+$/", $cardno)) {
            $cardno = test_input($_POST["cardno"]);
        } else {
            $cardnoErr = "Must contain numbers only";
            ?>
            <html><script>
                document.getElementById('cardnoErr').style.display = 'block';
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


        if ($cardnoErr == "" && $passwordErr == "") {
            $sql = "SELECT cardno, password FROM " . $type . "
            WHERE   cardno = " . $cardno . " AND 
            password = '$password'";
            $query = mysqli_query($conn, $sql);
            // echo $sql;
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                // go to respective home page
                header("Location: userfirstpage.php");
                $_SESSION['cardno'] = $cardno;
                
            } else {
                $Err = "card number or password is incorrect";
                ?>
                <html><script>
                    document.getElementById('Err').style.display = 'block';
                </script></html>
                <?php
            }
        }
        /* // if ($Err != "" || $cardnoErr != "" || $passwordErr != "") {
        //     ?>
        //     <html><script>
        //         document.getElementById('cardnoErr').style.display = 'block';
        //     </script></html>
        //     <?php
        // } */
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
                <img src="logo.jpg" width=70px height=70px>
            </div>
            <div class="left">
                <h1>BUS RESERVATION SYSTEM<sup>TM</sup></h1>
            </div>
        </div>
        <div class="topnav">
            <a class="active">Home</a>
            <a>Item2</a>
            <a>Item3</a>
            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    &emsp;
    <div class="floleft">
        <p>This is basic project demonstration by team PHOENIX</p>
        <p>To fall along please login.</p>
    </div>
    <div class="flonext" id=""><br><br>
        <h3>LOGIN</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div id="loginform" class="">
                <input type="text" name="type" id="type" value="user" class="hidden" readonly>
                
                <label for="cardno">Card Number</label>
                <input type="number" name="cardno" id="cardno" required>
                <span class="error" id="cardnoErr">* <?php echo $cardnoErr; ?></span><br>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <span class="error" id="passwordErr">* <?php echo $passwordErr; ?></span><br>

                <span class="error" id="Err"> <?php echo $Err; ?></span><br>
                <button type="submit" value="Submit">LOGIN</button>
            </div>
        </form>
    </div>
    
    
</body>

</html>