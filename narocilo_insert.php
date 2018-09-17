<?php
    include_once './session.php';
    include_once './database.php';

    $time = $_POST['time_app'];
    $doc = $_POST['doctor_id'];
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date_app'];
    $des = $_POST['descript'];
    
    $query = "SELECT * FROM appointments";
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
    
    
    
    
    if (!empty($time) && !empty($doc) && !empty($user_id) && !empty($date) && !empty($des) && ($time!= $post['time']) && ($date!= $post['date_app'])) {
        $query = "INSERT INTO appointments (time_app, doctor_id, date_app, user_id, descript) "
                . "VALUES ('$time', '$doc', '$date', '$user_id','$des')";
        if (mysqli_query($link, $query)) {
            //uspešno
            header("Location: zdravniki.php?e=1");
        }
        else {
            //napaka
            header("Location: zdravniki.php?e=2");
        }
        header("Location: zdravniki.php?e=1");
    }
    else {
        header("Location: narocila.php");
        echo 'Termin je že zaseden';
    }
    
?>
