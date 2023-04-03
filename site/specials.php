<?php

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filterOption = $_POST['filter_option'];
    if ($filterOption == "easiest") {
        $sql = "SELECT * FROM receptenboek WHERE instructies = (SELECT MIN(instructies) FROM receptenboek)";
    } else if ($filterOption == "hardest") {
        $sql = "SELECT * FROM receptenboek WHERE instructies = (SELECT MAX(instructies) FROM receptenboek)";
    } else if ($filterOption == "most_ingredients") {
        $sql = "SELECT * FROM receptenboek WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM receptenboek)";
    } else if ($filterOption == "least_ingredients") {
        $sql = "SELECT * FROM receptenboek WHERE aantal_ingredienten = (SELECT MIN(aantal_ingredienten) FROM receptenboek)";
    } else if ($filterOption == "longest") {
        $sql = "SELECT * FROM receptenboek WHERE total_duur = (SELECT MAX(total_duur) FROM receptenboek)";
    } else if ($filterOption == "shortest") {
        $sql = "SELECT * FROM receptenboek WHERE total_duur = (SELECT MIN(total_duur) FROM receptenboek)";
    } else {
        $sql = "SELECT * FROM receptenboek ";
    }

    $result = mysqli_query($conn, $sql);

    $recept = mysqli_fetch_assoc($result);
}


?>


<?php
include 'header.php';
?>

<main class="main1">

    <div class="titlecontainer">
        <h1 class="title"> RECEPTEN </h1>
    </div>

    <form action="specials.php" method="post">
        <label for="filter">Filter:</label>
        <select name="filter_option">
            <option value="default">Select an option</option>
            <option value="easiest">Easiest</option>
            <option value="hardest">Hardest</option>
            <option value="most_ingredients">Most ingredients </option>
            <option value="least_ingredients">Least ingredients </option>
            <option value="longest">Longest</option>
            <option value="shortest">Shortest</option>
        </select>
        <button type="submit">Filter Recipes</button>
    </form>



    <div class="recepten">

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
    </div>
</main>


<?php
include 'footer.php';
?>


</body>

</html>