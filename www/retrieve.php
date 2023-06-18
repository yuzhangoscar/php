<?php
    require_once('databaseReader.php');

    $table = "expenses";
    $currentMonth = date('m'); 
    $currentYear = date('Y');

    try{
        $databaseReader = new DatabaseReader();
        $rawData = $databaseReader->returnTotalExpensePerCategory($currentMonth, $currentYear, $table);
        echo json_encode($rawData);
    }
    catch(Excpetion $e) {
        echo json_encode([$e->getMessage()]);
    }

