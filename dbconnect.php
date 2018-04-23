<?php

$db_host = "localhost";
$db_name = "se";
$db_user = "root";
$db_pass = "mysql";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

