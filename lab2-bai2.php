<?php

class Product {
    public $name;
    public $price;
    public $quantity;

    public function setName($name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    public function getInfo(){
        return "Tên sản phẩm: " . $this->name .
               "<br>Giá: " . $this->price .
               "<br>Số lượng: " . $this->quantity;
    }

    public function calculateTotal(){
        return $this->price * $this->quantity;
    }
}

$product = new Product();

$product->setName("Iphone X");
$product->setPrice(123123);
$product->setQuantity(10);

echo $product->getInfo() . "<br>";
echo "Total: đ" . $product->calculateTotal();

?>