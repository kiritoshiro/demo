<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


$sql="SELECT * FROM items";
$result = mysqli_query($conn,$sql);


if (isset($_POST["submit"])) {

    $category = $_POST["category"];
    $model = $_POST["model"];
    $make = $_POST["make"];
    $available = $_POST["available"];


    createItem($conn, $category, $model, $make, $available);

    mysqli_close($conn);
}



