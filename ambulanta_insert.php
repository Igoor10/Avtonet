<?php
    include_once './session.php';
    include_once './database.php';
  
    $name = $_POST['name'];
    $doc = $_POST['id'];
    $user_id = $_SESSION['user_id'];
    
    
    if (!empty($name) && !empty($doc)) {
        $query = "INSERT INTO departments (name, doctor_id) "
                . "VALUES ('$name', '$doc')";
        mysqli_query($link, $query);
        header("Location: ambulante.php");
    }
    else {
        header("Location: ambulanta_add.php");
    }
    
?>

