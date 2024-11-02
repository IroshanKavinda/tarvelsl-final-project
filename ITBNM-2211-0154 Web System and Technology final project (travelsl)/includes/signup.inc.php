<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $pwdRepeat);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInput !== false) {
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location:../signup.php?error=invaliduid");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if ($pwdMatch !== false) {
        header("Location:../signup.php?error=passworddoesnotmatch");
        exit();
    }
    
    createUser($conn, $name, $username, $email, $pwd);
    
}
else {
    header('Location:../login.php');
}