<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DEMO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <div class="header">
        <ul>
            <li><a href="index.php">Pradžia</a></li>
            <?php
            if (isset($_SESSION["username"])) {
//                echo "<li>Sveiki, " . $_SESSION["username"] . "</li>";
                echo "<li><a href=\"includes/logout.inc.php\">Atsijungti</a></li>";
            } else {
                echo "<li><a href=\"signup.php\">Užsiregistruoti</a></li>";
                echo "<li><a href=\"login.php\">Prisijungti</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>

<div class="wrapper">