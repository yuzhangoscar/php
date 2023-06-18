<?php
    class DatabaseConnection {
        private $servername = "db";
        private $username = "root";
        private $password = "toor";
        private $database = "expense";
        private $conn;

        public function __construct() {
            $this->connect();
        }

        private function connect() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                die("connection failed: " . $this->conn->connect_error);
            }
        }

        public function getConnection() {
            return $this->conn;
        }
    }

