<?php
    include('../database/database.php');
    
    $id = $_POST['id'];
    $order_id = $_POST['order_id'];
    $quantity = $_POST['quantity'];
    $customerId = $_POST['customer_id'];
    $priceEach = $_POST['priceEach'];
    $orderComment = $_POST['order_comment'];
    $query = "UPDATE `quangcasestudy`.`orders` SET `order_comment` = '$orderComment',
     `customer_id` = '$customerId' WHERE `order_id` = '$order_id';";
    $pdo->query($query);

    $query2 = "UPDATE `quangcasestudy`.`orderdetails` SET `quantity` = '$quantity',
     `priceEach` = '$priceEach' WHERE (`product_id` = '$id'; and`order_id` = '$order_id')";
    $pdo->query($query2);

    if($query){
        header("location:./indexorder.php");
    }
?>