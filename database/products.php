<?php
require_once 'connect.php';

class Products extends Database
{

    public function getAll()
    {
        $query = "SELECT * FROM quangcasestudy.products";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getByCategory($id)
    {
        $query = "SELECT * FROM quangcasestudy.products WHERE category_style = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getByView()
    {
        $query = "SELECT * FROM quangcasestudy.products ORDER BY products.view DESC limit 0,6";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getNewProduct()
    {
        $query = "SELECT * FROM quangcasestudy.products where product_id IN(20,21,22)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProduct($id)
    {
        $query = "SELECT * FROM quangcasestudy.products INNER JOIN images ON products.product_id = images.product_id where products.product_id = ?;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function getProductById($id)
    {
        $query = "SELECT * FROM quangcasestudy.products where product_id = ?;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function getClassProduct($id)
    {
        $query = "SELECT * FROM quangcasestudy.products where category_style = (select category_style from quangcasestudy.products  where product_id = ?);";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function increaseView($id)
    {
        $query = "UPDATE quangcasestudy.products SET products.view = products.view+1 WHERE (product_id = ?);";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function getSearch($search)
    {
        $query = "SELECT * FROM quangcasestudy.products where product_name like '%$search%'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getCount()
    {
        $query = "SELECT count(product_id) as total FROM quangcasestudy.products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row =  $stmt->fetch();
        $total_records = $row['total'];
        return $total_records;
    }

    public function getSearchProduct($start, $limit)
    {
        $query = "SELECT * FROM quangcasestudy.products LIMIT $start, $limit";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

$productDB = new Products;
