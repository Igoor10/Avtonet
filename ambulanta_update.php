<?php
    include_once './session.php';
    include_once './database.php';
  
    $name = $_POST['name'];
    $doc = $_POST['doc'];
    $id = $_POST['id'];
    
    
    if (!empty($name) && !empty($doc) && isset($_SESSION['user_id'])==3) {
        $query = "UPDATE departments SET name='$name', doctor_id='$doc' "
                . "WHERE id = $id";
        mysqli_query($link, $query);
        header("Location: ambulanta.php?id=$id");
    }
    else {
        header("Location: ambulanta_edit.php?id=$id");
    }
    
?>
