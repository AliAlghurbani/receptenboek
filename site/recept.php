<?php
require 'database.php';

$receptnummer = $_GET["receptnummer"];

$sql = "SELECT * FROM receptenboek WHERE receptnummer = $receptnummer";

$result = mysqli_query($conn, $sql);
//zolang een rij gevuld kan worden wordt de loop uitgevoerd
$recept = mysqli_fetch_assoc($result);

?>


<?php
include 'header.php';
?>


<main class="main2">

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
        <img id="image1" src="<?php echo $recept['foto1'] ?>" alt="picture">
    </div>

    <div class="omschrijving">
        <?php echo $recept['omschrijving'] ?>
    </div>
    <div class="ingredienten">
        <h1> Ingredienten </h1>
        <?php echo $recept['ingredienten'] ?>
    </div>
    <div class="instructies">
        <h1> instructies </h1>
        <?php echo $recept['instructies'] ?>
    </div>
</main>

<?php
include 'footer.php';
?>

</body>

</html>