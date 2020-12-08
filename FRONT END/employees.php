<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <?php

    ob_start();
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bssdb";

    $conn = mysqli_connect($servername, $username, $password, $db);
    $sql = "SELECT * FROM employee ;" ;
    $query = mysqli_query($conn, $sql);
    $str = "";
    while ($row = mysqli_fetch_array($query)) {
        $name = $row[0];
        $salary = $row[1];
        $str .= "<tr>
                    <td>'$name'</td>
                    <td>'$salary'</td>
                </tr>";
    }
    ?>
</head>

<body>
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
            <a href="schedule.php">Schedule</a>
            <a href="user.php">Users</a>
            <a class="active">Employees</a>
            <a href="accounts.php">Accounts</a>
            <a href="transactions_admin.php">Transactions</a>
            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft">

    </div>
</body>

</html>