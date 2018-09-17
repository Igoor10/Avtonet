<?php
    include_once './header2.php';
    include_once './database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "SELECT * FROM doctors WHERE id=$id";
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
?>
<h1>Dodaj objavo</h1>

<form action="zdravnik_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>" />
    <label>Ime</label>
    <input type="text" name="first_name" value="<?php echo $post['first_name']; ?>" required="required" />
    <label>Priimek</label>
    <input type="text" name="last_name" value="<?php echo $post['last_name']; ?>" required="required" />
    <label>Telefonska številka</label>
    <input type="text" name="phone_num" value="<?php echo $post['phone_num']; ?>" required="required" />
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $post['email']; ?>" required="required" />
    <label>Geslo</label>
    <input type="password" name="pass" value="<?php echo $post['pass']; ?>" required="required" />
    <br />
    <input type="submit" value="Shrani" />
</form>


<?php
    include_once './footer2.php';
?>

