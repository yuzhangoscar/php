<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "expense";

    function logIntoMySQLDB() {
        global $servername, $username, $password, $database;
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    };

    
