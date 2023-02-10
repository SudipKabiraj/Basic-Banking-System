<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['Current Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Ohh! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['Current Balance'] - $amount;
                $sql = "UPDATE `customers` SET `Current Balance`=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['Current Balance'] + $amount;
                $sql = "UPDATE `customers` SET `Current Balance`=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='viewCustomers.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="css/selectTransfer.css">
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
        <h2 style="text-align:center">Transfer Money</h2>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit"><br>
                <div id="table-container">
                    <table>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Current Balance</th>
                        </tr>
                        <tr>
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['Name'] ?></td>
                            <td><?php echo $rows['E-mail'] ?></td>
                            <td><?php echo $rows['Current Balance'] ?></td>
                        </tr>
                    </table>
                </div>
                <br><br><br>
                <div id="fill">
                    <label for="receiver" style="font-weight:bold">Transfer To:</label>
                    <select id="receiver" name="to" required>
                        <option value="" disabled selected>Choose</option>
                        <?php
                            include 'connection.php';
                            $sid=$_GET['id'];
                            $sql = "SELECT * FROM customers where id!=$sid";
                            $result=mysqli_query($conn,$sql);
                            if(!$result)
                            {
                                echo "Error ".$sql."<br>".mysqli_error($conn);
                            }
                            while($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $rows['id'];?>" >
                            
                                <?php echo $rows['Name'] ;?> (Balance: 
                                <?php echo $rows['Current Balance'] ;?> ) 
                        
                            </option>
                        <?php 
                            } 
                        ?>
                    </select>
                    <br>
                    <br>
                        <label style="font-weight:bold" for="amount">Amount in &#x20B9;
                        :</label>
                        <input id="amount" type="number" name="amount" required>   
                        <br><br><br>
                        <div>
                            <button name="submit" type="submit">Transfer</button>
                        </div>
                </div>
        </form>
    </div>

    <footer>
       © Copyright 2023 | All rights reserved
    </footer>
</body>