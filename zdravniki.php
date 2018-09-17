<?php
    include_once './header2.php';
?>    

<h1>Zdravniki</h1>
<?php
if ($_SESSION['user_id'] == 3){
    echo '<a href="zdravnik_add.php" class="button alt">Dodaj zdravnika</a>';
}
if (isset($_GET['e'])) {
    $e = $_GET['e'];
    if ($e==1) {
        echo "Uspešno!";
    }
    else if ($e=2) {
        echo "Napaka";
    }
}
?>
        <br /><br />
<table border="1" colspan="1" rowspan="1">
    <tr>
        <th>Ime</th>
        <th>Telefonska številka</th>
        <th>E-naslov</th>
        <?php
        if ($_SESSION['user_id'] == 3){
            echo '<th>Akcija</th>';  
        }
        ?>
    </tr>
    <?php
        include_once './database.php';
        $query = "SELECT * FROM doctors";
        $result = mysqli_query($link, $query);
        while($row=mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
            echo '<td>'.$row['phone_num'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            if ($_SESSION['user_id'] == 3){
            echo '<td><a href="zdravnik_edit.php?id='.$row['id'].'">Uredi</a> / ';
            echo '<a href="zdravnik_delete.php?id='.$row['id'].'" onclick="return confirm(\'Prepričani?\');">Izbriši</a>';
            }
            echo '/ <a href="narocila.php?id='.$row['id'].'">Naroci</a>';
            echo '</td>';
            echo '</tr>';
            
        }
        
        ?>
    
</table>

<?php
    include_once './footer2.php';
?>
