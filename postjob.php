<?php

include 'config.php';

$projectname = $_POST['projectname'];
$domain = $_POST['domain'];
$duration = $_POST['duration'];
$budget = $_POST['budget'];
$details = $_POST['details'];
$erusername = $_POST['erusername'];
$status = $_POST['status'];
$eeusername = $_POST['eeusername'];
$review = $_POST['review'];
$rating = $_POST['rating'];

$sql = "INSERT INTO projects VALUES('$projectname','$domain','$duration','$budget','$details','$erusername',1)";
$result = $conn->query($sql);
header("Location: ../login.html");
?>
