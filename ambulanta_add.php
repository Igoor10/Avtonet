<?php
    include_once './header2.php';
?>
<?php
    include_once './database.php';
?>
<h1>Dodaj ambulanto</h1>

<form action="ambulanta_insert.php" method="post">
    <label>Ime</label>
    <input type="text" name="name" required="required" />
    <label>Zdravnik</label>
       <?php $sql = mysqli_query($link, "SELECT id, first_name, last_name FROM doctors");
            if (mysqli_num_rows($sql)){
                $select = '<select name="id">';
                while ($rs= mysqli_fetch_array($sql)){
            $select.= '<option value="'.$rs['id'].'">'.$rs['first_name'].' '.$rs['last_name'].'</option>';
                }
            }
            $select.='</select>';
            echo $select;
       ?>
    <br />
    <input type="submit" value="Shrani" />
</form>


<?php
    include_once './footer.php';
?>

