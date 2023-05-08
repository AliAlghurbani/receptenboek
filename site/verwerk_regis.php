<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

$voornaam = $_POST['txtVoornaam'];
$achternaam = $_POST['txtAchternaam'];
$postcode = $_POST['txtPostcode'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$sql = "INSERT INTO gebruikers (voornaam, achternaam, postcode, email, password)
 VALUES ('$voornaam', '$achternaam', '$postcode', '$email', '$password') ";

mysqli_query($conn, $sql);


?>
