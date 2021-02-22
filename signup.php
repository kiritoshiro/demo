<?php
include_once 'header.php';
?>

    <section class="signup-form">

        <div class="signup-form-form">

            <form action="includes/signup.inc.php" method="post">
                <h2>Registruotis</h2>
                <li>
                    <input type="text" name="username" placeholder="Vartotojo vardas...">
                </li>
                <li>
                    <input type="password" name="pwd" placeholder="Slaptažodis...">
                </li>
                <li>
                    <input type="password" name="pwdrepeat" placeholder="Pakartoti slaptažodį...">
                </li>
                <li>
                    <button type="submit" name="submit">Registruotis</button>
                </li>

            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>Užsiregistravote!</p>";
            }
        }
        ?>
    </section>


<?php
include_once 'footer.php';
?>