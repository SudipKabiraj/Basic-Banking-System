<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankSparks.com</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/banklogo.jpg" alt="BankSparks">
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#about-container">About</a></li>
            <li class="item"><a href="">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
            <h1 class="h-primary">Welcome to BankSparks</h1>
            <p>Banking at your ease</p>
            <p>This is where we help you reach your true potential.</p>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <a href="viewCustomers.php">
                    <img src="images/viewlogo.jpg" alt="Customers">
                </a>
                <a href="viewCustomers.php"><h2 class="h-secondary center">View Customers</h2></a>
            </div>

            <div class="box">
                <a href="">
                    <img src="images/transactionhistorylogo.jpg" alt="Make Payment">
                </a>
                <a href=""><h2 class="h-secondary center">Make Payment</h2></a>
            </div>
            
            <div class="box">
                <a href="transactionHistory.php">
                    <img src="images/transactionhistorylogo.jpg" alt="Transaction History">
                </a>
                <a href="transactionHistory.php"><h2 class="h-secondary center">Transactions History</h2></a>
            </div>

        </div>
    </section>

    <section id="about-container">
        <h1 class="h-primary center">About Me</h1>
        <div id="about">
            <div class="about-item">
                <img src="images/Sudip.jpg" alt="Sudip Kabiraj">
            </div>

            <div class="about-item">
                <div class="about-items">
                <h1>Sudip Kabiraj</h1>
                <ul>
                    <li>Intern at <strong>The Sparks Foundation</strong></li>
                    <li>Dr. B. C. Roy Engineering College</li>
                    <li>Connect Me:
                        <a href="https://www.linkedin.com/in/sudip-kabiraj" class="fa fa-linkedin"></a>
                        <a href="https://github.com/SudipKabiraj" class="fa fa-github"></a>
                        <a href="https://www.facebook.com/sudip.kabiraj.94" class="fa fa-facebook"></a>
                        <a href="https://instagram.com/the.kabiraj" class="fa fa-instagram"></a>
                    </li>
                </ul>
                </div>

                <div class="about-items">
                <h2>This Project Was Developed Using</h2>
                <ul>
                    <li>HTML, CSS</li>
                    <li>PHP</li>
                    <li>MYSQL</li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        © Copyright 2023 | All rights reserved
    </footer>
</body>

</html>