<?php 
    require_once('connectToDB.php');
    require_once('writeToDB.php');
    require_once('readFromDB.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $table = "Expenses";
    $today = date('Y-m-d');

    logExpense($expense, $category, $today, $table);
    $rawData = returnTotalExpensePerCategory($table);
    echo json_encode($rawData);
