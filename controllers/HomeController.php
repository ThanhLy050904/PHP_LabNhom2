<?php
require_once 'models/ProductModel.php';

class HomeController {
    public function index() {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts(); 
        
        require_once 'views/client/header.php';
        require_once 'views/client/home.php'; 
        require_once 'views/client/footer.php';
    }
    public function product() {
        include_once 'views/client/header.php';
        include_once 'views/client/product.php';
        include_once 'views/client/footer.php';
    }
}