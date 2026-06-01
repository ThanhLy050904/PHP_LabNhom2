<?php

class Product
{
    private $connection;

    // Constructor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // =========================
    // LẤY TẤT CẢ SẢN PHẨM
    // =========================
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM products";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error getAll: " . $e->getMessage());
        }
    }

    // =========================
    // LẤY 1 SẢN PHẨM THEO ID
    // =========================
    public function findOne($id)
    {
        try {
            $sql = "SELECT * FROM products WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC); // chỉ lấy 1 dòng
        } catch (PDOException $e) {
            die("Error findOne: " . $e->getMessage());
        }
    }

    // =========================
    // THÊM SẢN PHẨM
    // =========================
    public function create($data)
    {
        try {
            $sql = "INSERT INTO products (name, slug, price, description, image)
                    VALUES (?, ?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            return $stmt->execute([
                $data['name'],
                $data['slug'],
                $data['price'],
                $data['description'],
                $data['image']
            ]);
        } catch (PDOException $e) {
            die("Error create: " . $e->getMessage());
        }
    }

    // =========================
    // CẬP NHẬT SẢN PHẨM
    // =========================
    public function update($id, $data)
    {
        try {
            $sql = "UPDATE products 
                    SET name = ?, slug = ?, price = ?, description = ?, image = ?
                    WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            return $stmt->execute([
                $data['name'],
                $data['slug'],
                $data['price'],
                $data['description'],
                $data['image'],
                $id
            ]);
        } catch (PDOException $e) {
            die("Error update: " . $e->getMessage());
        }
    }

    // =========================
    // XOÁ SẢN PHẨM
    // =========================
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id = ?";
            $stmt = $this->connection->prepare($sql);

            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            die("Error delete: " . $e->getMessage());
        }
    }
}