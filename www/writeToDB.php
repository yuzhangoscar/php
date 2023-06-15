<?php
    require_once('connectToDB.php');

    function logExpense($expense, $category, $today, $table) {
        $conn = logIntoMySQLDB();

        $sql = "INSERT INTO $table (category, expense, today) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $category, $expense, $today);

        if ($stmt->execute()) {
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    };
