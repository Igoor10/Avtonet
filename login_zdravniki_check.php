<?php
    include_once './session.php';
    include_once './database.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (!empty($email) && !empty($pass)) {
        //pripravimo geslo
        $pass = sha1($salt.$pass);
        $query = "SELECT * FROM doctors WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) != 1) {
            //preusmeritev na login
            header("Location: login.php");
        }
        else {
            //vse je ok - naredi prijavo
            //rezultat select stavka - shrani v array
            $doctor = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $doctor['id'];
            $_SESSION['first_name'] = $doctor['first_name'];
            $_SESSION['last_name'] = $doctor['last_name'];
            
            //preusmeritev na login
            header("Location: moja_narocila.php");
        }
    }
    else {
        //preusmeritev na login
        header("Location: login_zdravniki.php");
    }
?>
