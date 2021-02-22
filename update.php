<?php
include_once 'header.php';
?>

<section class="signup-form">

    <div class="create-items">

        <form action="includes/items.php" method="post">
            <ul>
                <h1>Atnaujinti duomenis</h1>
                <li>
                    <label for="category">Kategorija</label> <br>
                    <input type="text" name="category" id="category">
                </li>
                <li>
                    <label for="model">Modelis:</label> <br>
                    <input type="text" name="model" id="model">
                </li>
                <li>
                    <label for="make">Gamintojas:</label> <br>
                    <input type="text" name="make" id="make">
                </li>
                <li>
                    <label for="available">Yra sandėlye:</label>
                    <select name="available" id="available">
                        <option value="1" selected >Taip</option>
                        <option value="0" >Ne</option>
                    </select>
                </li>
                <li>
                    <button type="submit" name="submit">Atnaujinti</button>
                </li>
            </ul>
        </form>
    </div>

</section>

<?php
include_once 'footer.php';
?>
