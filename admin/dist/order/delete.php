<?php
    $id = $_GET['id'];
    include('../../../database/orders.php');
    $delete = $orderdetailDB->getByOrderId($id);
    if(!empty($delete)){
        echo "<script>
        alert('Vui lòng xóa Orderdetail trước khi xóa Order');
        window.location = './orders.php';
        </script>";
    } else {
        $orderDB->delete($id);
    header("location:./orders.php");
    }
?>
