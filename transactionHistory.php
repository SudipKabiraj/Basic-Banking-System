<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Foundation Bank</title>
    <link rel="stylesheet" href="css/transactionHistory.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/banklogo.jpg" alt="BankSparks">
        </div>

        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="index.php #services-container">Services</a></li>
            <li class="item"><a href="index.php #about-container">About</a></li>
            <li class="item"><a href="">Contact Us</a></li>
        </ul>
    </nav>

    <div id="space">
        <table class="transactions">
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount Transfered</th>
                <th>Date and Time (yy/mm/dd and hr/min/sec)</th>
            </tr>
            <?php
            $res=mysqli_query($conn,"SELECT * FROM transactions");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["Sender"]; echo "</td>";
                echo "<td>"; echo $row["Receiver"]; echo "</td>";
                echo "<td>"; echo $row["Amount"]; echo "</td>";
                echo "<td>"; echo $row["Date and Time"]; echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
     
     <footer>
        © Copyright 2023 | All rights reserved
    </footer>
</body>