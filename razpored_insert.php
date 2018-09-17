<?php
    include_once './session.php';
    include_once './database.php';
  
    $start = $_POST['time_start'];
    $end = $_POST['time_end'];
    $dep = $_POST['department_id'];
    $doc = $_POST['doctor_id'];
    $user_id = $_SESSION['user_id'];
	$date = $_POST['work_date'];
    
    
    if (!empty($start) && !empty($doc) && !empty($dep) && !empty($doc) && $_SESSION['user_id']==3) {
        $query = "INSERT INTO schedule (time_start, time_end, department_id,doctor_id, work_date) "
                . "VALUES ('$start', '$end', '$dep', '$doc', '$date')";
        mysqli_query($link, $query);
        header("Location: razporedi.php");
    }
    else {
        header("Location: razpored_add.php");
    }
    
?>


