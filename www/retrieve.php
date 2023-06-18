<?php
    $table = "expenses";

    require_once('databaseReader.php');

    $currentMonth = date('m'); 
    $currentYear = date('Y');

    $databaseReader = new DatabaseReader();
    $rawData = $databaseReader->returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
    echo json_encode($rawData);
