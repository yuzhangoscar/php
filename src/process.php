<?php 
    require_once('connectToDB.php');
    require_once('writeToDB.php');
    require_once('readFromDB.php');

    $expense = $_POST['expense'];
    $category = $_POST['category'];
    $today = $_POST['date'];
    $table = "Expenses";
    $currentMonth = date('m'); 
    $currentYear = date('Y');

    logExpense($expense, $category, $today, $table);
    if ($_POST['option'] === "currentMonth") {
        $currentMonth = date('nn');
        $currentYear = date('yy');
    }
    $rawData = returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
    echo json_encode($rawData);
