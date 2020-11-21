<?php
require_once 'connect.php';

class Orderdetails extends Database
{
    public function getAll($id)
    {
        $query = "SELECT * FROM quangcasestudy.orderdetails inner join quangcasestudy.orders on orderdetails.order_id = orders.order_id where orderdetails.order_id = '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($orderID, $productID)
    {
        $query = "DELETE FROM `quangcasestudy`.`orderdetails` WHERE (`product_id` = '$productID' and `order_id` = '$orderID');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return true;
    }
    public function update($id, $order_id, $quantity, $customerId, $priceEach, $orderComment)
    {
        try {
            $query = "UPDATE `quangcasestudy`.`orders` SET `order_comment` = '$orderComment',
            `customer_id` = '$customerId' WHERE `order_id` = '$order_id';";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $query2 = "UPDATE `quangcasestudy`.`orderdetails` SET `quantity` = '$quantity',
            `priceEach` = '$priceEach' WHERE (`product_id` = '$id' and`order_id` = '$order_id')";
            $stmt2 = $this->conn->prepare($query2);
            $stmt2->execute();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function getByOrderId($id)
    {
        $query = "SELECT * FROM quangcasestudy.orderdetails where order_id= '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}

$orderdetailDB = new Orderdetails;

class Orders extends Database {
    public function getAll()
    {
        $query = "SELECT * FROM quangcasestudy.orders";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($orderID)
    {
        $query = "DELETE FROM `quangcasestudy`.`orders` WHERE (`order_id` = '$orderID');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return true;
    }
    public function update($orderID, $customerId, $orderComment)
    {
        try {
            $query = "UPDATE `quangcasestudy`.`orders` SET `order_comment` = '$orderComment',
            `customer_id` = '$customerId' WHERE `order_id` = '$orderID';";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

$orderDB = new Orders;