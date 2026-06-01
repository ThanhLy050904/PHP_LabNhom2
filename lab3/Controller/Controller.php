<?php
class Controller
{
    public function __construct()
    {
        if (!isset($_GET['page'])) {
            include "views/home.php";
        } else {
            include "views/" . $_GET['page'] . ".php";
        }
    }
}