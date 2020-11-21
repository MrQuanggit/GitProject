<?php
    include('../../../database/orders.php');
    
    $id = $_POST['id'];
    $order_id = $_POST['order_id'];
    $quantity = $_POST['quantity'];
    $customerId = $_POST['customer_id'];
    $priceEach = $_POST['priceEach'];
    $orderComment = $_POST['order_comment'];
    $orderdetailDB->update($id, $order_id, $quantity, $customerId, $priceEach, $orderComment);
    header("location:./orderdetail.php?id=$order_id");
?>