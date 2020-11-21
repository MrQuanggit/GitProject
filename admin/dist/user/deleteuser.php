<?php
    $id = $_GET['id'];
    include('../../../database/user.php');
    $userDB->delete($id);
    header("location:./indexuser.php");
 ?>