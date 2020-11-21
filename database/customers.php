<?php
require_once 'connect.php';

class Customers extends Database
{
    public function getAll()
    {
        $query = "SELECT * FROM quangcasestudy.customers";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $query = "DELETE FROM `quangcasestudy`.`customers` WHERE (`customer_id` = '$id');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return true;
    }
    public function update($id, $customer_name, $phone, $adress, $mail)
    {
        try {
            $query = "UPDATE `quangcasestudy`.`customers` SET `customer_name` = '$customer_name',
            `phone` = '$phone',`adress` = '$adress',`mail` = '$mail' WHERE `customer_id` = '$id';";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

$customerDB = new Customers;