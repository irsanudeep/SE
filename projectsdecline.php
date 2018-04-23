<?php

include 'config.php';

$projectname = $_POST['projectname'];
$domain = $_POST['domain'];
$eeusername = $_POST['eeusername'];
$return_url = $_POST['return_url'];
$status=1;

$sql = "update projects set status ='$status' where projectname='$projectname' and domain='$domain'";
$mysqli->query($sql);
header('Location:'.($return_url) );
?>