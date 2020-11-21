<?php
session_start();
include('./database/database.php');
include('./database/products.php');
// customers
$nameCustomer = $_POST['name'];
$phoneCustomer = $_POST['phone'];
$mailCustomer = $_POST['mail'];
$adressCustomer = $_POST['adress'];
// order
$comment = $_POST['comment'];
$text = "Chưa xác nhận";
// up data
$query = "insert into quangcasestudy.customers(customer_name, phone, adress, mail) values ('$nameCustomer', '$phoneCustomer', '$adressCustomer', '$mailCustomer');";
$pdo->query($query);
$customer_id = $pdo->lastInsertId();
$query1 = "insert into quangcasestudy.orders(order_comment,customer_id) values ('$comment','$customer_id');";
$pdo->query($query1);
$order_id = $pdo->lastInsertId();
foreach ($_SESSION['cart'] as $key => $value) {
    $row = $productDB->getProductById($key);
    $price = $row['priceEach'];
    $qty = $value['qty'];
    $query2 = "insert into quangcasestudy.orderdetails(order_id,product_id,quantity,priceEach,status) values ('$order_id', '$key', '$qty', '$price', '$text');";
    $pdo->query($query2);
}
if ($query2) {
    unset($_SESSION['cart']);
    $_SESSION['lastId'] = $order_id;
    header("location:./fcart.php");
}
