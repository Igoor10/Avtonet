<?php
    include_once './session.php';
    include_once './database.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (!empty($email) && !empty($pass)) {
        //pripravimo geslo
        $pass = sha1($salt.$pass);
        $query = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        //$query = "SELECT COUNT(*) FROM users WHERE email = '$email'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) != 1) {
            //ni uporabnik, je doktor al pa ne obstaja
            $query1 = "SELECT * FROM doctors WHERE email='$email' AND pass='$pass'";
            $result1 = mysqli_query($link, $query1);
            if (mysqli_num_rows($result1) != 1) {
                //ni ne doktor ne uporabnik
                header("Location: login.php");
            }
            else {
                //je doktor
                $user = mysqli_fetch_array($result1);
                $_SESSION['doktor'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                header("Location: login.php");
            }
        }
        else if (mysqli_num_rows($result)){
            //je uporabnik
            $user = mysqli_fetch_array($result);
            $_SESSION['doktor'] = false;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            
            //preusmeritev na index
            header("Location: index.php");
        }
    }
    else {
        //preusmeritev na login
        header("Location: login.php");
    }
?>

