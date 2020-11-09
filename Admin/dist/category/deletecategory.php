<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `library`.`category` WHERE (`Category_id` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>