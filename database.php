<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'zdravstveni_dom';

$link = mysqli_connect($server, $user, $pass, $db_name);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
$salt = 'dglkn349346$%dfh';
?>

