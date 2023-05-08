<?php include 'header.php'; ?>

<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post" action="verwerk_inloggen.php">
            <ul class="inloggensul">
                <li class="regisli">
                    <label for="txtEmail">Email</label><br>
                    <input type="text" id="txtEmail" name="txtEmail" placeholder="Email" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtPassword">Password</label><br>
                    <input type="text" id="txtPassword" name="txtPassword" placeholder="Password">
                </li>
                <li>
                    <a href="registratie.php" class="regislink"> I DON'T HAVE AN ACCOUNT!</a>
                </li>
                <li class="regisli">
                    <button type="submit"> LOG IN </button>
                </li>
            </ul>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>

</html>