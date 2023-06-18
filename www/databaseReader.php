<?php
    require_once('databaseConnection.php');

    class DatabaseReader {
        private $conn;
        private $month;
        private $year;
        private $table;

        public function __construct() {
            try {
                $dbConnection = new DatabaseConnection();
                $this->conn = $dbConnection->getConnection();
            } catch (Exception $e) {
                // Handle the exception appropriately (e.g., log the error, display a user-friendly message)
                echo "Error: " . $e->getMessage();
            }
        }

        public function returnTotalExpensePerCategory($month, $year, $table) {
            $this->month = (string)$month;
            $this->year = (string)$year;
            $this->table = $table;

            $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE YEAR(today) = ? AND MONTH(today) = ?");
            $stmt->bind_param("ss", $this->year, $this->month);
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                // Initialize an array to store the entries
                $entries = array();
    
                // Fetch each row from the result set
                while ($row = $result->fetch_assoc()) {
                    // Store the row data in the entries array
                    $entries[] = $row;
                }
    
                // Output the entries array
            } else {
                throw new Exception("No entries found in the table.");
            }
            $stmt->close();
    
            return $entries;
        }
    }
