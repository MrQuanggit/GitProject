<?php
    $id = $_GET['id'];
    $order_id = $_GET['order_id'];
    include('../../../database/orders.php');
    $orderdetailDB->delete($order_id,$id);
    header("location:./orderdetail.php?id=$order_id");
?>