<?php
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $des = $_POST['product_description'];
    $style = $_POST['category_style'];
    $stock = $_POST['stock'];
    $img = $_POST['img'];
    $priceEach = $_POST['priceEach'];
    $size = $_POST['size'];
    $slug = $_POST['slug'];
    $update = $_POST['update_date'];
    $create = $_POST['create_date'];
    include('../../../database/database.php');
    $query = "INSERT INTO `quangcasestudy`.`products` (`product_id`, `product_name`, `product_description`, `category_style`, `stock`, `img`, `priceEach`, `update_date`, `create_date`, `size`, `slug`) 
    VALUES ('$id', '$name', '$des', '$style', '$stock', '$img', '$priceEach', '$update', '$create', '$size', '$slug');";
    $pdo->query($query);
    if($query){
        header("location:./indexproduct.php");
    }
?>