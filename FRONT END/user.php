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
    $sql = "SELECT * FROM user ;";
    $query = mysqli_query($conn, $sql);
    $str = "";
    $str .= "<tr>
                <th>Card number</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Balance</th>
            </tr>";
    while ($row = mysqli_fetch_row($query)) {
        $str .= "<tr>
                    <td>" . $row[0] . "</td>
                    <td>" . $row[2] . "</td>
                    <td>" . $row[3] . "</td>
                    <td>" . $row[4] . "</td>
                    <td>" . $row[5] . "</td>
                    <td>" . $row[6] . "</td>
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
            <a class="active">Users</a>
            <a href="employees.php">Employees</a>
            <a href="accounts.php">Accounts</a>
            <a href="transactions.php">Transactions</a>
            <a class="logout">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft">
        <table>
            <?php echo $str; ?>
        </table>
    </div>
</body>

</html>