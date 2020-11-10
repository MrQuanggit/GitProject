<?php
    $name = $_POST['category_style'];
    $des = $_POST['category_description'];
    include('../database/database.php');
    $query = "insert into quangcasestudy.category(category_style, category_description) values ('$name', '$des');";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>