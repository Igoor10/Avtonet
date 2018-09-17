<?php
if (isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }
    include_once 'header2.php';

?>
		

<h1>Prijava</h1>

<form action="login_check.php" method="post">
    <label>E-pošta</label>
    <input type="email" name="email" required="required" />
    <a href="login_zdravniki.php">Ste zdravnik?</a>
    <label>Geslo</label>
    <input type="password" name="pass" required="required" />
    <br />
    <input type="submit" value="Prijavi" />
</form>
<br />
<a href="registration.php">Še niste registrirani? Registrirajte se zdaj!</a>

<?php

    include_once 'footer2.php';

?>
