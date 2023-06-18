<?php
    require_once('databaseConnection.php');

    class expenseLogger {
        private $conn;

        public function __construct() {
            try {
                $dbConnection = new DatabaseConnection();
                $this->conn = $dbConnection->getConnection();
            } catch (Exception $e) {
                // Handle the exception appropriately (e.g., log the error, display a user-friendly message)
                echo "Error: " . $e->getMessage();
                $this->conn->close();
            }
        }

        public function logExpense($expense, $category, $today, $table) {
            $sql = "INSERT INTO $table (category, expense, today) VALUES (?, ?, ?)"; 
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sss", $category, $expense, $today);

            if ($stmt->execute()) {
            } else {
                throw new Exception("Error: " . $stmt->error);
            }
            $stmt->close();
            $this->conn->close();
        }
    }
