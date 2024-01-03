<?php

namespace App\Controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\config\db_conn;
use App\Models\User;
use App\services\UserServices;

use PDO;
use PDOException;
class UserController{

    public function register() {
        if (isset($_POST['signup'])) {
        $postData = $_POST ?? [];
        $username = $postData['username'] ?? '';
        $email = $postData['email'] ?? '';
        $phone_number = $postData['phone_number'] ?? '';
        $password = $postData['password'] ?? '';
        
        // Set initial values for image, status, and role_id
        $image = null; 
        $status = 0;  
        $role_id = 3; 
    
        // Create a Users object
        $user = new User($username, $email, $phone_number, $password, $image, $status, $role_id);
    
        // Create an instance of UserServices
        $userServices = new UserServices();
    
        // Call the createUser method in UserServices to handle user creation logic
        $result = $userServices->createUser($user);
    
        // Return the result
        if ($result) {
            // User created successfully
            header('location:login');
            exit();
        } else {
            return false;
        }
    }
    }
   


    public function login() {
        $postData = $_POST ?? [];
        $email = $postData['email'] ?? '';
        $password = $postData['password'] ?? '';


        // Instantiate UserDAO
        $userServices = new UserServices();

        // Get user details by email
        $user = $userServices->getUserByEmail($email);

        if ($user['password'] == $password) {
            // Start a session
            session_start();

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            // Get user's role
            $role = $user['role_id'];

            $_SESSION['role_id'] = $role;
           
            // Redirect based on user's role
            if ($role === 1) {
                header('Location: dashboard.php');
                exit();
            } elseif ($role === 2) {
                header('Location: listings.php');
                exit();
            } else {
                header('Location: error');
                exit(); 
               
            }
        } else {
            // Redirect with error message for invalid credentials
            header('Location: login.php?error=invalid_credentials');
           
            exit();
           
        }
    }


    public function getUsers() {
        $users = UserServices::getAllUsers();
        return $users;
    }



    public function userDelete() {

        if(isset($_GET['user_id'])){
            $userId = $_GET['user_id'];

            $userService = new UserServices();

            $deleted = $userService->deleteUser($userId);

            if ($deleted) {
                header('Location: user-list');
            } else {
                echo "Failed to delete the user ";
            }
        }else {
            echo "User id is missing ";
        }

    }

    // public function AddUser($postData) {
    //     $fullname = $postData['first-name'] ?? '';
    //     $lastname = $postData['last-name'] ?? '';
    //     $email = $postData['email'] ?? '';
    //     $phone = $postData['phone'] ?? '';
    //     $password = $postData['password'] ?? '';
    //     $role = $postData['user_role'] ?? ''; // Assuming 'user_role' corresponds to the role ID

    //     $user = new User($fullname, $lastname, $email, $phone, $password);
    //     $user->setRole($role); // Set user role
    //     $userDAO = new UserDAO();

    //     $result = $userDAO->addUser($user);

    //     return $result;
    // }


















    // public function fetchUsers() {
    //     try {
    //         $dbConnection = db_conn::getConnection();
            
    //         // Prepare SQL query
    //         $query = "SELECT * FROM users";
    
    //         // Execute the query using PDO
    //         $statement = $dbConnection->query($query);
    
    //         // Fetch data as associative array
    //         $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //         // Close the database connection properly
    //         $dbConnection = null;
    
    //         // Set response header to JSON
    //         header('Content-Type: application/json');
    
    //         // Output data as JSON
    //         echo json_encode($data);
    //         exit; // Ensure no further output after sending JSON response
    //     } catch (PDOException $e) {
    //         // Handle any database connection errors
    //         http_response_code(500); // Internal Server Error
    //         echo json_encode(array($data);
    //         exit; // Ensure no further output after sending JSON error response
    //     }
    // }
 
    

}


