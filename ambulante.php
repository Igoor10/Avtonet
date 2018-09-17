<?php

    include_once 'header2.php';

?>
		

<h1>Ambulante</h1>
<?php
if ($_SESSION ['user_id'] == 3) {
    echo '<a href="ambulanta_add.php" class="button alt">Dodaj ambulanto</a>';
}
        ?>
<br /><br />
<table border="1" colspan="1" rowspan="1">
    <tr>
        <th>Ime</th>
        <th>Zdravnik</th>
        <?php
        if ($_SESSION ['user_id'] == 3) {
            echo '<th>Akcija</th>';  
        }
        ?>
    </tr>
    <?php
        include_once './database.php';
        $query = "SELECT a.id, a.name, d.first_name, d.last_name FROM departments a INNER JOIN doctors d ON d.id=a.doctor_id";
        $result = mysqli_query($link, $query);
        while($row=mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
            echo '<td>';
            echo '<a href="ambulanta.php?id='.$row['id'].'">Poglej</a> ';
            if ($_SESSION ['user_id'] == 3) {
            echo '/<a href="ambulanta_edit.php?id='.$row['id'].'">Uredi</a> / ';
            echo '<a href="ambulanta_delete.php?id='.$row['id'].'" onclick="return confirm(\'Prepričani?\');">Izbriši</a>';
            echo '</td>';
            echo '</tr>';
            }
        }
            ?>
				</div>
			</section>
