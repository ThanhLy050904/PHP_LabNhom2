<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/AdminController.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

switch ($url) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'product':
        $controller = new HomeController();
        $controller->product();
        break;

    case 'admin':
        $controller = new AdminController();
        $controller->dashboard();
        break;

    default:
        echo "404 - Trang không tồn tại";
        break;
}
?>