<?php
    require_once('connectToDB.php');

    function returnTotalExpensePerCategory($month, $year, $table) {
        $month = (string)$month;
        $year = (string)$year;
        $conn = logIntoMySQLDB();
        $stmt = $conn->prepare("SELECT * FROM {$table} WHERE YEAR(today) = ? AND MONTH(today) = ?");
        $stmt->bind_param("ss", $year, $month);
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
            echo "No entries found in the table.";
        }

        return $entries;
    };
