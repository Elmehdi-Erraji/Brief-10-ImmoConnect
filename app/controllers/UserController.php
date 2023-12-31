<?php

namespace App\Controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\User;
use App\services\UserServices;
class UserController{

    public function createUser($postData) {
        // Retrieve form data
        $username = $postData['username'] ?? '';
        $email = $postData['email'] ?? '';
        $phone_number = $postData['phone_number'] ?? '';
        $password = $postData['password'] ?? '';
        // $confirmPassword = $postData['confirmPassword'] ?? '';
        
        
        // Set initial values for image, status, and role_id
        $image = null; 
        $status = 0;  
        $role_id = 3; 
    
        // Create a Users object
        $user = new User($username, $email, $phone_number, $password, $image, $status, $role_id);
    
        // Create an instance of UserDAO
        $userDAO = new UserServices();
    
        // Call the createUser method in UserDAO to handle SQL logic
        $result = $userDAO->createUser($user);
    
        if ($result) {
            // User created successfully
            return true;
        } else {
            // User creation failed
            return false;
        }
    }

}



// Register form handling
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    // Instantiate the UserController
    $userController = new UserController();

    // Call the createUser method in UserController
    $result = $userController->createUser($_POST);

    if ($result) {
        // User created successfully
        header('Location: /Brief-9-library-managment/views/auth/login.php');
        exit();
    } else {
        echo "something went wrong buddy";
        // // User creation failed
        // header('Location: signup.php?error=failed_creation');
        exit();
    }
}
