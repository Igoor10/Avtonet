<?php
    include_once './session.php';
    include_once './database.php';
  
    if(isset($_SESSION['user_id'])==3){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_num = $_POST['phone_num'];
        $email = $_POST['email'];
        $user_id = $_SESSION['user_id'];
        $pass = $_POST['pass'];
    }

   
    if (!empty($first_name) && !empty($last_name) && !empty($phone_num) && !empty($email) && !empty($pass)) {
        $query = "UPDATE doctors SET first_name='$first_name', last_name='$last_name', phone_num='$phone_num', email='$email', pass='$pass'; "
                . "WHERE id = $id";
        mysqli_query($link, $query);
        header("Location: zdravniki.php");
    }
    else {
        header("Location: zdravnik_edit.php?id=$id");
    }
    
?>
