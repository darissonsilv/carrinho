<?php

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($product_id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE product_id = :product_id");
        $stmt->bindParam(":product_id", $product_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Outros métodos relacionados a produtos, como adição, remoção, atualização, etc.
    // ...
}

?>
