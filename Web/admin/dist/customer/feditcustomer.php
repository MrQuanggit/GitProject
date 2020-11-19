<?php
    include('../database/database.php');
    
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $mail = $_POST['mail'];
    $query = "UPDATE `quangcasestudy`.`customers` SET `customer_name` = '$orderComment',
     `phone` = '$phone', `adress` = '$adress', `mail` = '$mail' WHERE `customer_id` = '$id';";
    $pdo->query($query);

    if($query){
        header("location:./indexcustomer.php");
    }
?>