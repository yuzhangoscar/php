<?php
    require_once('connectToDB.php');

    function returnTotalExpensePerCategory($table) {
        $conn = logIntoMySQLDB();
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);

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
            echo "No entries found in the table.";
        }

        return $entries;
    };
