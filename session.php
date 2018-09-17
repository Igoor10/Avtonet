<?php
    session_start();
    
    $allowed = ['/zdravstveni_dom/login.php','/zdravstveni_dom/login_check.php',
                '/zdravstveni_dom/registration.php', '/zdravstveni_dom/user_insert.php',
                '/zdravstveni_dom/login_zdravniki.php', '/zdravstveni_dom/login_zdravniki_check.php'];
    
    
    if (!isset($_SESSION['user_id']) && 
            !in_array($_SERVER['REQUEST_URI'], $allowed)) {
        header("Location: login.php");
    }


?>
