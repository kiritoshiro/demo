<?php
include_once 'header.php';
?>

<section class="signup-form">

    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
            <h2>Prisijunkti</h2>
            <li>
                <input type="text" name="username" placeholder="Vartotojo vardas...">
            </li>
            <li>
                <input type="password" name="pwd" placeholder="Slaptažodis...">
            </li>
            <li>
                <button type="submit" name="submit">Prisijungti</button>
            </li>


        </form>
    </div>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Užpildikyte visus laukelius</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>Neteisingi prisijungimo duomnenys";
        }
    }
    ?>
</section>


<?php
include_once 'footer.php';
?>
