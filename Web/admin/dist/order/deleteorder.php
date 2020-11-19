<?php
    $id = $_GET['id'];
    $order_id = $_GET['order_id'];
    include('../database/database.php');
    $query = "DELETE FROM `quangcasestudy`.`orderdetails` WHERE (`product_id` = '$id' and `order_id` = '$order_id');";
    $pdo->query($query);
    if($query){
        header("location:./indexorder.php");
    }
?>