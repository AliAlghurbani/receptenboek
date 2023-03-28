<?php
require 'database.php';

$receptnummer = $_GET["receptnummer"];

$sql = "SELECT * FROM receptenboek WHERE receptnummer = $receptnummer";

$result = mysqli_query($conn, $sql);
//zolang een rij gevuld kan worden wordt de loop uitgevoerd
$recept = mysqli_fetch_assoc($result);

echo $recept["titel"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="recept-details.css">
    <title>Shrimp tamels</title>
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
            <img id="logo2pic" src="<?php echo $recept['foto2'] ?>" alt="img">
        </div>
    </header>


    <main>

        <div class="top">
            <div class="topdetails">
                <div class="receptnaam">
                    <h1><?php echo $recept['titel'] ?> </h1>
                    <p><?php echo $recept['kok'] ?></p>
                </div>
                <div class="extradetails">
                    <div class="preptime">
                        <p> Prep time</p>
                        <h1><?php echo $recept['bereidtijd'] ?></h1>
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="cooktime">
                        <p> Cook time</p>
                        <h1><?php echo $recept['kooktijd'] ?></h1>
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="serves">
                        <p> Serves </p>
                        <h1><?php echo $recept['aantalserves'] ?></h1>
                        <span class="material-symbols-outlined"> group </span>
                    </div>
                </div>
            </div>
            <img id="image1" src="ropa vieja2.jpg" alt="picture">
        </div>

        <div class="omschrijving">

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