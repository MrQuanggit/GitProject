<?php
    $id = $_GET['id'];
    include('../../../database/customers.php');
    $customerDB->delete($id);
    header("location:./indexcustomer.php");
 ?>