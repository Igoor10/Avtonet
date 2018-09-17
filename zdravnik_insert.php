<?php
    include_once './session.php';
    include_once './database.php';
  
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_num = $_POST['phone_num'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $user_id = $_SESSION['user_id'];
    
    
    
    
    if (!empty($first_name) && !empty($last_name) && !empty($phone_num) && !empty($email) && !empty($pass) && isset($_SESSION['user_id'])==3) {
        
        $pass = $salt.$pass;
        $pass = sha1($pass);
        
        $query = "INSERT INTO doctors (first_name, last_name, phone_num, email, pass) "
                . "VALUES ('$first_name', '$last_name', '$phone_num', '$email', '$pass')";
        mysqli_query($link, $query);
        header("Location: zdravniki.php");
    }
    else {
        header("Location: zdravnik_add.php");
    }
    
?>

