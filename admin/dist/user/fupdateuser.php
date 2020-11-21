<?php
    include('../../../database/user.php');
    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $roles = $_POST['roles'];
    $userDB->update($id, $user_name,$user_password,$roles);
    header("location:./indexuser.php");
?>