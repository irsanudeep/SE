<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: loginee.php");
} else if (isset($_SESSION['user']) != "") {
    header("Location: index.html");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("Location: loginee.php");
    exit;
}
