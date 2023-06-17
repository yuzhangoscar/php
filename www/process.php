<?php 
    require_once('connectToDB.php');
    require_once('writeToDB.php');
    require_once('readFromDB.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $today = $_POST['date'];
    $option = $_POST['option'];
    $table = "expenses";
    $currentMonth = date('m'); 
    $currentYear = date('Y');

    logExpense($expense, $category, $today, $table);
    if ($option === "currentMonth") {
        $currentMonth = date('m');
        $currentYear = date('Y');
    }
    $rawData = returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
    echo json_encode($rawData);
