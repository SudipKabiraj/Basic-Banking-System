<?php
include "connection.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Customers</title>
        <link rel="stylesheet" href="css/viewCustomers.css">
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
            <table class="customers">
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Current Balance</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
            $res=mysqli_query($conn,"SELECT * FROM customers");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["Name"]; echo "</td>";
                echo "<td>"; echo $row["E-mail"]; echo "</td>";
                echo "<td>"; echo $row["Current Balance"]; echo "</td>";
                echo "<td>"; ?><a href="selectTransfer.php? id=<?php echo $row["id"];?>"><button>Transfer</button></a><?php echo "</td>";
                echo "</tr>";
            }
            $conn->close();
            ?>
            </table>
        </div>

        <footer>
           © Copyright 2023 | All rights reserved
        </footer>
    </body>

    </html>