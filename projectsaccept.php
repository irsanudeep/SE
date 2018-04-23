<?php

include_once 'config.php';

$projectname = $_POST['projectname'];
$domain = $_POST['domain'];
$eeusername = $_POST['eeusername'];
$return_url = $_POST['return_url'];
$status=2;

$sql = "update projects set status ='$status' , eeusername='$eeusername' where projectname='$projectname' and domain='$domain'";
$mysqli->query($sql);

header('Location:'.($return_url) );
?>