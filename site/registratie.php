<?php include 'header.php'; ?>


<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post">
            <ul class="regisul">
                <li class="regisli">
                    <label for="txtVoornaam">Voornaam</label><br>
                    <input type="text" id="txtVoornaam" name="txtVoornaam" placeholder="Voornaam" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtTussenvoegsels">Tussenvoegsels</label><br>
                    <input type="text" id="txtTussenvoegsels" name="txtTussenvoegsels" placeholder="Tussenvoegsels">
                </li>
                <li class="regisli">
                    <label for="txtAchternaam">Achternaam</label><br>
                    <input type="text" id="txtAchternaam" name="txtAchternaam" placeholder="Achternaam">
                </li>
                <li class="regisli">
                    <label for="txtStraat">Straat</label><br>
                    <input type="text" id="txtStraat" name="txtStraat" placeholder="Straat">
                </li>
                <li class="regisli">
                    <label for="txtHuisnummer">Huisnummer</label><br>
                    <input type="text" id="txtHuisnummer" name="txtHuisnummer" placeholder="Huisnummer">
                </li>
                <li class="regisli">
                    <label for="txtPostcode">Postcode</label><br>
                    <input type="text" id="txtPostcode" name="txtPostcode" placeholder="Postcode">
                </li>
                <li class="regisli">
                    <label for="txtPlaats">Plaats</label><br>
                    <input type="text" id="txtPlaats" name="txtPlaats" placeholder="Plaats">
                </li>
                <li class="regisli">
                    <label for="txtLand">Land</label><br>
                    <input type="text" id="txtLand" name="txtLand" placeholder="Land">
                </li>
                <li class="regisli">
                    <button type="submit"> RIGESTER </button>
                </li>
            </ul>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>

</html>