<?php

// require_once __DIR__ . '/../../vendor/autoload.php';

// use App\config\db_conn;

// use PDO;
// use PDOException;
// function fetchDataFromDB() {
//     $dbConnection = db_conn::getConnection();

//     try {
//         // Prepare SQL query
//         $query = "SELECT * FROM users";

//         // Execute the query using PDO
//         $statement = $dbConnection->query($query);

//         // Fetch data as associative array
//         $data = $statement->fetchAll(PDO::FETCH_ASSOC);

//         return $data;
//     } catch (PDOException $e) {
//         // Handle any database connection errors
//         return [
//             'error' => true,
//             'message' => 'Query failed: ' . $e->getMessage()
//         ];
//     }
// }

// // Fetch data
// $data = fetchDataFromDB();

// // Set response header to JSON
// header('Content-Type: application/json');

// // Output data as JSON or error message if applicable
// echo json_encode($data);
