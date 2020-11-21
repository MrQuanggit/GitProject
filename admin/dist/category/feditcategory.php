<?php
    include('../../../database/database.php');
    $des = $_POST['category_description'];
    $idCategory = $_POST['category_style'];
    $id = $_POST['id'];
    $query = "UPDATE `quangcasestudy`.`category` SET `category_style` = '$idCategory', `category_description` = '$des' WHERE (`category_style` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>