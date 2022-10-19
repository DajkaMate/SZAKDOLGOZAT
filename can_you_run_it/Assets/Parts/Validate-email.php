<?php

$mysqli = require __DIR__ . "/Database.php";

$sql = sprintf("SELECT * FROM user
                WHERE USER_EMAIL = '%s'",
                $mysqli->real_escape_string($_GET["USER_EMAIL"]));
                
$result = $mysqli->query($sql);

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $is_available]);