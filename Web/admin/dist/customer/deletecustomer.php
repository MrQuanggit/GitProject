<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `quangcasestudy`.`customers` WHERE `customer_id` = '$id';";
    $pdo->query($query);
    if($query){
        header("location:./indexcustomer.php");
    }
?>