<?php
    include_once './header2.php';
?>    

<h1>Razporedi</h1>
<?php
if ($_SESSION['user_id']==3){
echo '<a href="razpored_add.php" class="button alt">Dodaj razpored</a>';
}
?>
        <br /><br />
<table border="1" colspan="1" rowspan="1">
    <tr>
        <th>Datum</th>
        <th>Čas</th>
        <th>Ambulanta</th>
        <th>Zdravnik</th>
        <?php
        if ($_SESSION ['user_id'] == 3) {
            echo '<th>Akcija</th>';  
        }
        ?>
    </tr>
    <?php
        include_once './database.php';
        $query = "SELECT s.*, a.id, a.name, d.first_name, d.last_name, s.id AS sid FROM schedule s INNER JOIN departments a ON s.department_id=a.id INNER JOIN doctors d ON d.id=a.doctor_id";
        $result = mysqli_query($link, $query);
        while($row=mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$row['work_date'].'</td>';
            echo '<td>'.$row['time_start'].'-'.$row['time_end'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
            echo '<td>';
            if ($_SESSION['user_id']==3){
            echo '<a href="razpored_delete.php?id='.$row['sid'].'" onclick="return confirm(\'Prepričani?\');">Izbriši</a>';
            }
            echo '</td>';
            echo '</tr>';
        }
        
        ?>
    
</table>

<?php
    include_once './footer.php';
?>
