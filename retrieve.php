<?php
    $table = "Expenses";

    require_once('readFromDB.php');

    $rawData = returnTotalExpensePerCategory($table);
    echo json_encode($rawData);
