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
$db="bssdb";

$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "SELECT * FROM transaction ;";
$query = mysqli_query($conn, $sql);
$str = "";
$str .= "<tr>
            <th>transactionID</th>
            <th>Card number</th>
            <th>Bus Number</th>
            <th>Trip Number</th>
            <th>Seat number</th>
            <th>From place</th>
            <th>To place</th>
            <th>Date</th>
        </tr>";
while ($row = mysqli_fetch_row($query)) {
    $transactionID = $row[0];
    $cardno = $row[1];
    $busno = $row[2];
    $tripno = $row[3];
    $seatno = $row[4];
    $fromplace = $row[5];
    $toplace = $row[6];
    $fromdate = $row[7];
    $str .= "<tr>
                <td>" . $transactionID . "</td>
                <td>" . $cardno . " </td>
                <td>" . $busno . "</td>
                <td>" . $tripno . "</td>
                <td>" . $seatno . "</td>
                <td>" . $fromplace . "</td>
                <td>" . $toplace . "</td>
                <td>" . $fromdate . "</td>
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
        <a href="accounts.php">Accounts</a>
        <a class="active">Transactions</a>
        <a class="logout" href="index.php">logout</a>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft" style="padding:20px 0px">
        <table style="margin:10px 10px;">
            <?php echo $str; ?>
        </table>
    </div>
    </body>
</html>