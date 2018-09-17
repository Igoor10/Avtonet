<?php
    include_once './header2.php';
    include_once './database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "SELECT * FROM departments WHERE id=$id";
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
?>
<h1>Dodaj ambulanto</h1>

<form action="ambulanta_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>" />
    <label>Ime</label>
    <input type="text" name="name" value="<?php echo $post['name']; ?>" required="required" />
    <label>Zdravnik</label>
    <input type="text" name="doc" value="<?php echo $post['doctor_id']; ?>" required="required"/>
    <br />
    <input type="submit" value="Shrani" />
</form>


<?php
    include_once './footer2.php';
?>
