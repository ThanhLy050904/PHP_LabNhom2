<?php
 class Database {
      private $db_host = "localhost";
      private $db_name = "php1_fall2025";
      private $db_user = "root";
      private $db_password = "mysql";
      private $db_connection;

      public function __construct($host = null, $name = null, $user = null, $password = null) {
          if ($host !== null) $this->db_host = $host;
          if ($name !== null) $this->db_name = $name;
          if ($user !== null) $this->db_user = $user;
          if ($password !== null) $this->db_password = $password;
      }
     public function connect() {
        try {
            $this->db_connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
            $this->db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->db_connection;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
     }
 }
?>