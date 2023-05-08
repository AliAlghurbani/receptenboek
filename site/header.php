<?php
require 'database.php';


$result = mysqli_query($conn, "SELECT DISTINCT COUNT(receptnummer) FROM receptenboek");
$row = mysqli_fetch_array($result);

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cubano</title>
</head>

<body>
    <header>
        <a href="index.php"><img id="logopic" src="images/LOGO-removebg-preview.png" alt="LOGO"></a>
        <nav>

            <ul class="ulnav">
                <li class="linav"> <a href="index.php">HOME PAGE </a></li>
                <li class="linav"> <a href="#">CUBA </a></li>
                <li class="linav"><a href="recepten.php"> RECIPES </a></li>
                <li class="linav"><a href="contact.php"> SPECIAL EVENTS </a></li>
                <li class="linav"><a href="#"><?php echo $row[0]; ?> RECEPTEN </a></li>
            </ul>
        </nav>
        <div class="divsocials">
            <ul class="ulsocials">
                <li class="lisocials"><a href="#" class="fa fa-facebook"></a></li>
                <li class="lisocials"><a href="#" class="fa fa-youtube"></a></li>
                <li class="lisocials"><a href="#" class="fa fa-twitter"></a></li>
                <li class="lisocials"><a href="https://www.instagram.com/decubano9/" class="fa fa-instagram"></a></li>
            </ul>
        </div>
        <div>
            <a href="inloggen.php" class="inloggenButton"> INLOGGEN </a>
        </div>
    </header>