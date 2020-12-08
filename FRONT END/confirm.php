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

    $fromplace = $_SESSION['fromplace'];
    $toplace = $_SESSION['toplace'];
    $date = $_SESSION['date'];
    $busno = $_SESSION['busno'];
    $tripno = $_SESSION['tripno'];
    $cardno = $_SESSION['cardno'];
    $count = $_SESSION['count'];
    $seats = $_SESSION['seats'];



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
        <a class="active" href="search.php">Home</a>
        <a href="transactions.php">My Transactions</a>
        <a href="profile.php">Profile</a>        
        <a class="logout">logout</a>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="floleft" style="margin : 10px 250px;">
        <table>
            <tr>
                <td> Transaction ID</td>
                <td></td>
            </tr>
            <tr>
                <td>Card no</td>
                <td><?php echo $cardno; ?></td>
            </tr>
            <tr>
                <td>From</td>
                <td><?php echo $fromplace; ?></td>
            </tr>
            <tr>
                <td>To</td>
                <td><?php echo $toplace; ?></td>
            </tr>
            <tr>
                <td>Trip no</td>
                <td><?php echo $tripno; ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo $date; ?></td>
            </tr>
            <tr>
                <td>Bus no</td>
                <td><?php echo $busno; ?></td>
            </tr>
            <tr>
                <td>No of seats</td>
                <td><?php echo $count; ?></td>
            </tr>
            <tr>
                <td>Seats</td>
                <td><?php echo $seats; ?></td>
            </tr>
        </table>
        <button type="submit" style="margin:10px 450px;" value="ok" onclick="window.location.href='search.php'" name="ok">ok</button>
    </div>
    </body>
</html>