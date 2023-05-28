<?php
    $table = "Expenses";

    require_once('readFromDB.php');
    require_once('calculateByCategory.php');

    $rawData = returnTotalExpensePerCategory($table);
    $sortedDataByCategory = calculateTotalExpensesByCategory($rawData);
    echo json_encode($sortedDataByCategory);
