<?php
include_once 'header.php';
?>
    <section class="index-intro">
    </section>

    <section class="index-categories">
        <div class="index-categories-list">

            <table border="1">
                <tr>
                    <th>Kategorija:</th>
                    <th>Modelis</th>
                    <th>Gamintojas</th>
                    <th>Sandėlyje</th>
                    <?php
                    if (isset($_SESSION["isadmin"])) {
                        echo "<th>";
                        echo "<a href='create.php'>Pridėti</a>";
                        echo "</th>";
                    }
                    ?>
                </tr>

                <?php
                include 'includes/items.php';
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    if ($row['available']) {
                        echo "<td>Taip</td>";
                    } else {
                        echo "<td>Ne</td>";
                    }

                    if (isset($_SESSION["isadmin"])) {
                        echo "<td>";
                        echo "<a href='update.php'>Atnaujinti   ";
                        echo "<a href='includes/delete.php'>Ištrinti";
                        echo "</td>";
                    }

                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </section>
<?php
include_once 'footer.php';
?>