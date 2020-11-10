<?php
    include('../database/database.php');
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
    $idProduct = $_POST['product_id'];
    $query = "UPDATE `quangcasestudy`.`products` SET `product_name` = '$name',
     `product_description` = '$des', `category_style` = '$style',
      `stock` = '$stock', `img` = '$img', `priceEach` = '$priceEach', `size` = '$size',
       `slug` = '$slug', `update_date` = '$update', `create_date` = '$create' WHERE `product_id` = '$idProduct';";
    // var_dump($query);
    // die();
    $pdo->query($query);
    if($query){
        header("location:./indexproduct.php");
    }
?>