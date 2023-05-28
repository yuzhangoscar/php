<?php 
    require_once('connectToDB.php');
    require_once('writeToDB.php');
    require_once('readFromDB.php');
    require_once('calculateByCategory.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $table = "Expenses";

    logExpense($expense, $category, $table);
    $rawData = returnTotalExpensePerCategory($table);
    $sortedDataByCategory = calculateTotalExpensesByCategory($rawData);
    echo json_encode($sortedDataByCategory);
