<?php
    include('../../../database/database.php');
    
    $id = $_GET['id'];
    $order_id = $_GET['order_id'];
    $text = "Đã xác nhận";
    $qty = $_GET['quantity'];

    $query = "UPDATE `quangcasestudy`.`orderdetails` SET `status` = '$text' WHERE (`product_id` = '$id' and`order_id` = '$order_id')";
    $pdo->query($query);
    $conn = "UPDATE quangcasestudy.products SET products.stock = products.stock-$qty WHERE (product_id = $id);";
    $pdo->query($conn);

    if($query){
        header("location:./orderdetail.php?id=$order_id");
    }
?>