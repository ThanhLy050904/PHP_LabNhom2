<?php
class HomeController
{
    public function __construct()
    {

    }
    public function index()
    {
        require_once"views/home.php";
    }
    public function product()
    {
        require_once"views/product.php";
    }
    public function __destruct()
    {
    
    }
}
