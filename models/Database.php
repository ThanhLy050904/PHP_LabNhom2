<?php
class Database {
    private $db_host = "onehost-webhn072403.000nethost.com";
    private $db_name = "pltiozushosting_khanghuynh";
    private $db_user = "pltiozushosting_khanghuynh";
    private $db_pass = "Khanghuynh21@";

    public function connect() {
        $dsn = "mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8";
        try {
            $pdo = new PDO($dsn, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}