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


<?php
include 'header.php';
?>

<main>

    <div class="titlecontainer">
        <h1 class="title"> RECEPTEN </h1>
    </div>
    <div class="specialsButton">
        <a href="specials.php"> specials </a>
    </div>

    <div class="recepten">

        <?php foreach ($all_recepten as $recept) : ?>
            <div class="recept">
                <a href="recept.php?receptnummer=<?php echo $recept['receptnummer'] ?>">
                    <img class="receptImage" src="<?php echo $recept['foto2']; ?>" alt="receptfoto">
                    <div class="koknaam">
                        <p><?php echo $recept['kok'] ?></p>
                    </div>
                    <div class="receptDetails">
                        <h1><a href="#" class="receptdetailstitle"> <?php echo $recept['titel'] ?> </a></h1>
                        <div class="receptDetailsarticle">
                            <?php echo $recept['menu_omschrijving'] ?>
                        </div>
                        <p> READ MORE</p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>



    </div>
</main>


<?php
include 'footer.php';
?>

</body>

</html>