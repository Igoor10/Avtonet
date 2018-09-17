<?php
    include_once './header2.php';
    include_once './database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "SELECT a.*, d.first_name, d.last_name "
            . "FROM departments a INNER JOIN doctors d ON d.id=a.doctor_id "
            . "WHERE a.id=$id";
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
?>
<h3><?php echo $post['first_name'].' '.$post['last_name']; ?></h3>
<p><?php echo $post['name']; ?></p>

<?php
    include_once './footer.php';
?>

