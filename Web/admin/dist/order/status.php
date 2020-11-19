<?php
    include('../database/database.php');
    
    $id = $_GET['id'];
    $order_id = $_GET['order_id'];
    $text = "Đã xác nhận";

    $query = "UPDATE `quangcasestudy`.`orderdetails` SET `status` = '$text' WHERE (`product_id` = '$id' and`order_id` = '$order_id')";
    $pdo->query($query);

    if($query){
        header("location:./indexorder.php");
    }
?>