<?php
    include_once './header2.php';
?>    

<h1>Moja narocila</h1>
        <br /><br />
<table border="1" colspan="1" rowspan="1">
    <tr>
        <th>Datum</th>
        <th>Čas</th>
        <th>Opis</th>
        <th>Pacient</th>
        <th>Zdravnik</th>
    </tr>
    <?php
        include_once './database.php';
        $query = "SELECT a.*, d.first_name, d.last_name, u.first_name, u.last_name FROM doctors d INNER JOIN appointments a ON a.doctor_id=d.id INNER JOIN users u ON u.id=a.user_id";
        $result = mysqli_query($link, $query);
        while($row=mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$row['date_app'].'</td>';
            echo '<td>'.$row['time_app'].'</td>';
            echo '<td>'.$row['descript'].'</td>';
            echo '<td>'.$row['d.first_name'].' '.$row['d.last_name'].'</td>';
            echo '<td>'.$row['u.first_name'].' '.$row['u.last_name'].'</td>';
            echo '</td>';
            echo '</tr>';
        }
        
        ?>
    
</table>

<?php
    include_once './footer.php';
?>

