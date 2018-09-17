<?php
include_once './session.php';
include_once './database.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

//preverim. če je uporabnik pravilno izpolnil obrazec
if (!empty($first_name) && !empty($last_name) && !empty($email)
        && !empty($pass1) && ($pass1==$pass2)) {
    //vse ok
    $pass = $salt.$pass1;
    $pass = sha1($pass);
    
    $query = "INSERT INTO users(first_name,last_name,email,pass) "
            . "VALUES ('$first_name','$last_name','$email','$pass')";
    mysqli_query($link, $query);
    
}
else {
    //preusmeritev nazaj
    header("Location: registration.php");
}

header("Location: login.php");

?>
