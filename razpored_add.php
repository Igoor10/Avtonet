<?php
    include_once './header2.php';
?>
<?php
    include_once './database.php';
?>
<h1>Dodaj razpored</h1>

<form action="razpored_insert.php" method="post">
    <label>Datum</label>
    <input type="date" name="work_date" required="required" />
    <label>Čas začetka</label>
    <input type="time" name="time_start" required="required" />
    <label>Čas konca</label>
    <input type="time" name="time_end" required="required" />
    <label>Ambulanta</label>
       <?php $sql = mysqli_query($link, "SELECT id, name FROM departments");
            if (mysqli_num_rows($sql)){
                $select = '<select name="department_id">';
                while ($rs= mysqli_fetch_array($sql)){
            $select.= '<option value="'.$rs['id'].'">'.$rs['name'].'</option>';
                }
            }
            $select.='</select>';
            echo $select;
       ?>
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

