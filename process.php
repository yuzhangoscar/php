<?php 
    require_once('connectToDB.php');
    require_once('writeToDB.php');
    require_once('readFromDB.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $table = "Expenses";

    function calculateTotalExpensesByCategory($expensesArray) {
        $totals = array();

        // Iterate through the expenses array
        foreach ($expensesArray as $expense) {
            $category = $expense['category'];
            $expenseValue = $expense['expense'];

            // Check if the category exists in the totals array
            if (array_key_exists($category, $totals)) {
                // Category already exists, add the expense to the existing total
                $totals[$category] += $expenseValue;
            } else {
                // Category doesn't exist, initialize the total with the expense value
                $totals[$category] = $expenseValue;
            }
        }

        return $totals;
    };

    logExpense($expense, $category, $table);
    $rawData = returnTotalExpensePerCategory($table);
    $sortedDataByCategory = calculateTotalExpensesByCategory($rawData);
    echo json_encode($sortedDataByCategory);
