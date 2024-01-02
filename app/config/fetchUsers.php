<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\config\db_conn;

function fetchDataFromDB() {
    $dbConnection = db_conn::getConnection();

    try {
        // Prepare SQL query
        $query = "SELECT * FROM users";

        // Execute the query using PDO
        $statement = $dbConnection->query($query);

        // Fetch data as associative array
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    } catch (PDOException $e) {
        // Handle any database connection errors
        die("Query failed: " . $e->getMessage());
    }
}

// Fetch data
$data = fetchDataFromDB();

// Set response header to JSON
header('Content-Type: application/json');

// Output data as JSON
echo json_encode($data);

