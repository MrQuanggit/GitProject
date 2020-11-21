<?php
    include('../../../database/customers.php');
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $mail = $_POST['mail'];
    $customerDB->update($id, $customer_name,$phone,$adress,$mail);
    header("location:./indexcustomer.php");
?>