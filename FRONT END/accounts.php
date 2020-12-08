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
    $sql = "SELECT * FROM revenue ;";
    $query = mysqli_query($conn, $sql);
    $str = "";
    $str .= "<tr>
                <th>Bus number</th>
                <th>Trip number</th>
                <th>Fuel Costs</th>
                <th>Maintenence</th>
                <th>Income</th>
                <th>date</th>
            </tr>";
    while ($row = mysqli_fetch_row($query)) {
        $str .= "<tr>
                    <td>" . $row[0] . "</td>
                    <td>" . $row[1] . "</td>
                    <td>" . $row[2] . "</td>
                    <td>" . $row[3] . "</td>
                    <td>" . $row[4] . "</td>
                    <td>" . $row[5] . "</td>
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
            <a href="employees.php">Employees</a>
            <a class="active">Accounts</a>
            <a href="transactions_admin.php">Transactions</a>
            <a href="adminloginpage.php">logout</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft">
        <table style="margin:10px 80px;">
            <?php echo $str; ?>
        </table>
    </div>
</body>

</html>