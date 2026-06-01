<?php
class Product {
    public $name;
    public $price;
    public $quantity;
    // Các phương thức setName, setPrice, setQuantity, getInfo, calculateTotal

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getInfo() {
        return "Name: " . $this->name . ", Price: " . $this->price . ", Quantity: " . $this->quantity;
    }

    public function calculateTotal() {
        return $this->price * $this->quantity;
    }
}

// Sử dụng lớp Product
$product = new Product();
$product->setName("iPhone X");
$product->setPrice(999);
$product->setQuantity(10);

echo $product->getInfo() . "<br>";
echo "Total: " . $product->calculateTotal();
