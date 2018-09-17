<?php
    include_once './header2.php';
?>
<h1>Dodaj zdravnika</h1>

<form action="zdravnik_insert.php" method="post">
    <label>Ime</label>
    <input type="text" name="first_name" required="required" />
    <label>Priimek</label>
    <input type="text" name="last_name" required="required" />
    <label>Email</label>
    <input type="email" name="email" required="required" />
    <label>Geslo</label>
    <input type="password" name="pass" required="required" />
    <label>Telefonska številka</label>
    <input type="text" name="phone_num" required="required" />
    <br />
    <input type="submit" value="Shrani" />
</form>


<?php
    include_once './footer2.php';
?>
