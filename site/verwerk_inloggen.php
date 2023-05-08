<?php


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

if (isset($_POST['email'])) {
    //We controleren of de key email in de POST-array bestaat

    //daarna controleren we of het emailadres is ingevuld (dus niet leeg)
    if (!empty($_POST['email'])){
        // dan komt hier de rest van de code.....

        //het eerste input field met een name attribuut 'email'
        $email = $_POST ['email'];

        //we hebben een database connicte nodig
        require 'database.php';
        //we gaan nu het emailadres dat is ingevuld vergelijken met de waardes in de database.

        $sql = "SELECT * FROM gebruikers WHERE email = '$email'"; // check de single-qoutes naast email

        //dan voeren we de query uit:
        $result = mysqli_query($conn,$sql);

        $user = mysqli_fetch_assoc($result);
        
    }
}