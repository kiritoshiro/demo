<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

// nesugalvoju kaip gauti itemId -_-
$sql = "DELETE FROM items WHERE itemsId=";

if ($conn->query($sql) === TRUE) {
    echo "Įrašas ištrintas";
} else {
    echo "Įvyko klaida trinant įrašą: " . $conn->error;
}

$conn->close();