<?php



include "db.php";
$id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id=". $id;
    $result = mysqli_query($conn, $query);


    $del = "DELETE FROM `taskss`.`task` WHERE (`id` = '$id')";

    if (mysqli_query($conn,$del)) {}


?>

<html>

    <a href="index.php">
Deleted!
    </a>
</html>