<?php
    require_once('connectToDB.php');

    function logExpense($expense, $category, $table) {
        $conn = logIntoMySQLDB();
        $sql = "INSERT INTO $table (category, expense) VALUES (?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $category, $expense);

        if ($stmt->execute()) {
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    };
