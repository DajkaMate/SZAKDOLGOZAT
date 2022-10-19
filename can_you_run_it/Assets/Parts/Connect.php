<?php

if (empty($_POST["Nickname"])) 
{
    die("Name is required");
}

if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) 
{
    die("Valid email is required");
}

if (strlen($_POST["Password"]) < 8) 
{
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["Password"])) 
{
    die("Password must contain at least one letter");
}

if ($_POST["Password"] !== $_POST["Repeat_Password"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["Password"], PASSWORD_DEFAULT);
$ID = rand();

$mysqli = require __DIR__ . "/Database.php";

$sql = "INSERT INTO user (USER_ID, USER_NAME, USER_EMAIL, USER_PASSWORD) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("isss",$ID, $_POST["Nickname"], $_POST["Email"], $password_hash);

if ($stmt->execute()) {

    header("Location:   ../../SignupSuccess.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) 
    {
        die("email already taken");
    } 
    else 
    {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>