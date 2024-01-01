<?php

namespace App\Controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\User;
use App\services\UserServices;
class UserController{

    public function createUser($postData) {

        var_dump($postData);
        
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
    public function showRegisterForm()
    {
        // Display the registration form HTML here
        include __DIR__ . '/../Views/register_form.php'; // Adjust path to your register form view
    }

}


