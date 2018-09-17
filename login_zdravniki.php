<?php
if (isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }
    include_once 'header2.php';

?>
		

<h1>Prijava za zdravnike</h1>

<form action="login_zdravniki_check.php" method="post">
    <label>E-pošta</label>
    <input type="email" name="email" required="required" />
    <label>Geslo</label>
    <input type="password" name="pass" required="required" />
    <br />
    <input type="submit" value="Prijavi" />
</form>
<?php

    include_once 'footer2.php';

?>

