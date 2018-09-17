<?php
    include_once './session.php';
    include_once './database.php';

    $id = (int) $_GET['id'];
    $user_id = $_SESSION['user_id'];
    
    echo $id;
    if( $user_id == 3){
    
    $query = "DELETE FROM departments WHERE id=$id";
    mysqli_query($link, $query);
    }
    header("Location: ambulante.php");
?>


