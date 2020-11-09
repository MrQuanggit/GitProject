<?php
    $id = $_POST['Category_id'];
    $name = $_POST['Category_name'];
    include('../database/database.php');
    $query = "insert into library.category(Category_id, Category_name) values ('$id', '$name');";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>