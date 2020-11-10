<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `quangcasestudy`.`products` WHERE (`product_id` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexproduct.php");
    }
?>