<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Error handling

    // if empty inputs
    if(emptyInputSignup($username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    // passwords don't match
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    // username already exists
    if(usernameExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $username, $pwd);

}
else {
    header("location: ../signup.php");
    exit();
}