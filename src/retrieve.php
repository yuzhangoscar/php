<?php
    $table = "Expenses";

    require_once('readFromDB.php');

    $currentMonth = date('m'); 
    $currentYear = date('Y');

    $rawData = returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
    echo json_encode($rawData);
