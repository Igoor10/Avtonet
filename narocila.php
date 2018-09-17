<?php
    include_once './header2.php';
?>
<?php
    include_once './database.php';
?>
<h1>Narocite se na pregled</h1>

<form action="narocilo_insert.php" method="post">
    <label>Datum</label>
    <input type="date" name="date_app" required="required" />
    <label>Ura</label>
    <input type="time" name="time_app" required="required" />
    <label>Opis</label>
    <textarea name="descript" rows="4" cols="50"></textarea>
    <label>Zdravnik</label>
    <?php $sql = mysqli_query($link, "SELECT id, first_name, last_name FROM doctors");
            if (mysqli_num_rows($sql)){
                $select = '<select name="doctor_id">';
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


