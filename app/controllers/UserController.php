<?php

namespace App\Controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\User;
use App\services\UserServices;
class UserController{

    public function register() {
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
            // User creation failed
            return false;
        }
    }
    public function signup() {
        echo 'test 1111';
    }
    public function showRegisterForm()
    {
        // Display the registration form HTML here
        include __DIR__ . '/../Views/register_form.php'; // Adjust path to your register form view
    }

}


