<?php
    require_once('writeToDB.php');
    require_once('readFromDB.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $today = $_POST['date'];
    $option = $_POST['option'];
    $table = "expenses";
    $currentMonth = date('m'); 
    $currentYear = date('Y');

    $expenseLogger = new expenseLogger();
    try {
        $expenseLogger->logExpense($expense, $category, $today, $table);
    }
    catch(Exception $e) {
        throw new Exception("Error logging expense into the db: ", $e->getMessage());
    }

    if ($option === "currentMonth") {
        $currentMonth = date('m');
        $currentYear = date('Y');
    }

    $databaseReader = new DatabaseReader();
    $rawData = $databaseReader->returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
    echo json_encode($rawData);
