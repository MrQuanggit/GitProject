<?php
    // include("editbook.php");
    include('../database/database.php');
    $name = $_POST['Category_name'];
    $idCategory = $_POST['id'];
    $query = "UPDATE library.category SET Category_name = '$name' WHERE category_id = '$idCategory'";
    $pdo->query($query);
    if($query){
        header("location:./indexcategory.php");
    }
?>