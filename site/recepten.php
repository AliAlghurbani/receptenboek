<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM receptenboek";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="website.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand:wght@700&family=Noto+Sans+Symbols+2&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cubano</title>
</head>

<body>
    <header>
        <img id="logopic" src="LOGO-removebg-preview.png" alt="LOGO">
        <nav>

            <ul class="ulnav">
                <li class="linav"> <a href="#">CUBA </a></li>
                <li class="linav"><a href="#"> RECIPES </a></li>
                <li class="linav"><a href="#"> SPECIAL EVENTS </a></li>
                <li class="linav"><a href="#"> ABOUT OUR BOOK</a></li>
            </ul>
        </nav>
        <div class="divsocials">
            <ul class="ulsocials">
                <li class="lisocials"><a href="#" class="fa fa-facebook"></a></li>
                <li class="lisocials"><a href="#" class="fa fa-youtube"></a></li>
                <li class="lisocials"><a href="#" class="fa fa-twitter"></a></li>
                <li class="lisocials"><a href="#" class="fa fa-instagram"></a></li>
            </ul>
        </div>
        <div>
            <img id="logo2pic" src="logo3-removebg-preview.png" alt="img">
        </div>
    </header>

    <main>

        <div class="titlecontainer">
            <h1 class="title"> RECEPTEN </h1>
        </div>
        <div class="recepten">


            <div class="recept" style="color: black;">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="receptDetails">
                    <h1> Ropa vieja </h1>
                </div>
            </div>
            <div class="recept">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="koknaam">
                    <p> mesut ozil</p>
                </div>
                <div class="receptDetails">
                    <h1><a href="#" class="receptdetailstitle"> Cuban Shrimp Tamales </a></h1>
                    <div class="receptDetailsarticle">
                        Tamales in Cuba can be traced back to the Ciboney,
                        the original native inhabitants of the island.
                    </div>
                    <p> READ MORE</p>
                </div>
            </div>
            <div class="recept">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="receptDetails">
                    <h1> </h1>
                </div>
            </div>
            <div class="recept">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="receptDetails">
                    <h1> </h1>
                </div>
            </div>
            <div class="recept">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="receptDetails">
                    <h1> </h1>
                </div>
            </div>
            <div class="recept">
                <img class="receptImage" src="ropa vieja1.jpg" alt="recept1">
                <div class="receptDetails">
                    <h1> </h1>
                </div>
            </div>


        </div>
    </main>


    <footer>

        <div class="footerdetails">
            <h1> ABOUT . PRIVACY POLICY </h1>
            <p> Copyright © 2023 Static Media®/ Cubano.com / All Rights Reserved </p>
        </div>

        <ul class="ulfooter">
            <li class="lifooter"> <a href="#"> EXPLORE CUBA </a></li>
            <li> | </li>
            <li class="lifooter"> <a href="#"> DRINKEN </a></li>
            <li> | </li>
            <li class="lifooter"> <a href="#"> CHEFS </a></li>
            <li> | </li>
            <li class="lifooter"> <a href="#"> POLICIES </a></li>
            <li> | </li>
            <li class="lifooter"> <a href="#"> MEAL </a></li>
            <li> | </li>
            <li class="lifooter"> <a href="#"> CONTACT </a></li>
        </ul>
        <img id="logofooter" src="logo3-removebg-preview.png" alt="img">
    </footer>

</body>

</html>