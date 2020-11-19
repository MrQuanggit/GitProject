<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `quangcasestudy`.`category` WHERE (`category_style` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>