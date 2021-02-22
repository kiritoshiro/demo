<?php

function emptyInputSignup($username, $pwd, $pwdRepeat) {
    $result;
    if(empty($username) || empty($pwd) || empty($pwdRepeat) ){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username, $pwd) {
    $result;
    if(empty($username) || empty($pwd) ){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function usernameExists($conn, $username) {
    $result;

    // creates placeholders for data
    $sql = "SELECT * FROM users WHERE username = ?;";

    // prepared statement
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s",$username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        // for sign up and login forms
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $pwd) {
    $sql = "INSERT INTO users(username, password) VALUES (?,?);";

    // prepared statement
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss",$username,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

}

function loginUser($conn, $username, $pwd) {
    $usernameExists = usernameExists($conn, $username);

    if($usernameExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $usernameExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }


    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersId"];
        $_SESSION["username"] = $usernameExists["username"];
        $_SESSION["isadmin"] = $usernameExists["isAdmin"];
        header("location: ../index.php");
        exit();
    }
}

function createItem($conn, $category, $model, $make, $available){
    $sql = "INSERT INTO items(category, model, make, available) VALUES (?,?,?,?);";

    // prepared statement
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../create.php?error=stmtfailed");
        exit();
    }

    if ($available === false) {

    }
    mysqli_stmt_bind_param($stmt, "ssss",$category,$model, $make, $available);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit();
}


