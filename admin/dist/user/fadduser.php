<?php
    include('../../../database/user.php');
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $roles = $_POST['roles'];
    $userDB->create($user_name, $user_password, $roles);
    header("location:./indexuser.php");
?>