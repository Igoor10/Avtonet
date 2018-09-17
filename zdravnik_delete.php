<?php
    include_once './session.php';
    include_once './database.php';

    $id = (int) $_GET['id'];
    $user_id = $_SESSION['user_id'];
    
    if(isset($_SESSION['user_id'])==3){
    
    $query = "DELETE FROM doctors WHERE id=$id";
    mysqli_query($link, $query);
    }
    header("Location: zdravniki.php");
?>

