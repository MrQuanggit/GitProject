<?php
require_once 'connect.php';

class User extends Database
{
    public function getAll() {
        $query = "SELECT * FROM quangcasestudy.users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $query = "DELETE FROM `quangcasestudy`.`users` WHERE (`user_id` = ?);";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return true;
    }
    public function update($id, $user_name, $user_password, $roles)
    {
        try {
            $query = "UPDATE `quangcasestudy`.`users` SET `user_name` = '$user_name',
            `user_password` = '$user_password',`roles` = '$roles' WHERE `user_id` = '$id';";
            $stmt = $this->conn->prepare($query);
            // $stmt->bindValue(1, $user_name);
            // $stmt->bindValue(2, $user_password);
            // $stmt->bindValue(3, $roles);
            // $stmt->bindValue(4, $id);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function create($user_name, $user_password, $roles)
    {
        try {
            $query = "INSERT INTO `quangcasestudy`.`users` (`user_name`, `user_password`, `roles`) VALUES (?, ?, ?);";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $user_name);
            $stmt->bindValue(2, $user_password);
            $stmt->bindValue(3, $roles);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

$userDB = new User;