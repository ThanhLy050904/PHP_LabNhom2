<?php
class HomeController {
    public function index() {
        include_once 'views/client/header.php';
        include_once 'views/client/home.php';
        include_once 'views/client/footer.php';
    }

    public function product() {
        include_once 'views/client/header.php';
        include_once 'views/client/product.php';
        include_once 'views/client/footer.php';
    }
}