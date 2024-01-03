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
   

    public function addUser(){
        if (isset($_POST['addUser'])) {
            $postData = $_POST ?? [];
            $username = $postData['username'] ?? '';
            $email = $postData['email'] ?? '';
            $phone_number = $postData['phone'] ?? '';
            $role_id = $postData['user_role'] ?? '';
            $status = $postData['status'] ?? '';
            $password = $postData['password'] ?? '';
            // No image-related code here
            $image = $_FILES['user_image'] ?? null;
          // Check if an image was uploaded
        if ($image && $image['error'] === UPLOAD_ERR_OK) {
            $imagePath = $image['tmp_name']; // Temporary path of the uploaded image
            
            // Process image upload here (move the uploaded image to the desired directory)
            $uploadDirectory = '../../public/assets/images/users/';
            $imageName = basename($image['name']);
            $uploadedImagePath = $uploadDirectory . $imageName;
            
            if (move_uploaded_file($imagePath, $uploadedImagePath)) {
                // Image uploaded successfully
                $image = $uploadedImagePath; // Update $image with the uploaded image path
            } else {
                // Handle image upload failure
                $image = null; // Set image path to null or handle the error accordingly
            }
        } else {
            // No image uploaded or an error occurred during upload
            $image = null;
        }

        // Create User object including the image parameter
        $user = new User($username, $email, $phone_number, $password, $image, $status, $role_id);
        
        $userServices = new UserServices();
        $result = $userServices->addUser($user);

        if ($result) {
            header('Location:user-list');
        } else {
            return false;
        }
    }
}





public function login() {
    $postData = $_POST ?? [];
    $email = $postData['email'] ?? '';
    $password = $postData['password'] ?? '';

    // Validate and sanitize input data as needed

    // Instantiate UserDAO
    $userServices = new UserServices();

    // Get user details by email
    $user = $userServices->getUserByEmail($email);

    if ($user && password_verify($password, $user['password'])) {
        if ($user['statut'] == 0) { // Check if user status is active
            // Start a session if not started
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['image'] = $user['image'];

            // Redirect based on user's role
            $role = $user['role_id'];
            if ($role === 1) {
                header('Location: dashboard');
                exit();
            } elseif ($role === 2) {
                header('Location: listings');
                exit();
            } else {
                header('Location: profile');
                exit();
            }
        } else {
            // User status is not active (banned)
            // Set error message in session and redirect to login page
            session_start();
            $_SESSION['login_error'] = 'Your account has been banned. Please contact the admin.';
            header('Location: login');
            exit();
        }
    } else {
        // Redirect with error message for invalid credentials
        session_start();
        $_SESSION['login_error'] = 'Invalid credentials. Please try again.';
        header('Location: login');
        exit();
    }
}
    public function logout() {
       
            session_start();
    
            // Unset all of the session variables
            $_SESSION = [];
    
            // Destroy the session
            session_destroy();
    
            // Redirect to the login page after logout
            header('Location: login'); // Redirect to your login page
            exit();
        
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

    public function showData() {
        $model = new UserServices();
        $userCount = $model->countUsers();
        

        // Include the view file and pass the variables
        return [$userCount];
        }





        public function updateUser() {
            $postData = $_POST ?? [];
            $errors = [];
        
            if (isset($_POST['updateUser'])) {
                // Retrieve form data
                $userId = $postData['user_id'] ?? '';
                $username = $postData['username'] ?? '';
                $email = $postData['email'] ?? '';
                $phone_number = $postData['phone'] ?? '';
                $role_id = $postData['user_role'] ?? '';
                $status = $postData['status'] ?? '';
            
                if (empty($username)) {
                    $errors['username'] = "Username is required";
                }else if (empty($email)) {
                    $errors["email"] = "Email is required";
                }else if (empty($phone_number)) {
                    $errors["phone"] = "Phone is required";
                }

                // Create an instance of UserDAO
                $userService = new UserServices();
            
                // Get the user object by ID to check if it exists
                $existingUser = $userService->getUserById($userId);
            
                if ($existingUser) {
                    // Update the user object with the new data
                    $existingUser->setUsername($username);
                    $existingUser->setEmail($email);
                    $existingUser->setPhoneNumber($phone_number);
                    $existingUser->setRoleId($role_id);
                    $existingUser->setStatut($status);
            
                    // Update the user in the database
                    $result = $userService->updateUser($existingUser);
            
                    if ($result) {
                        // User updated successfully
                        header('Location: user-list');
                        exit();
                    } else {
                        $errors['update'] = "Failed to update user.";
                    }
                } else {
                    $errors['update'] = "User not found.";
                }
              
        $_SESSION['updateUserErrors'] = $errors;
        header('Location: update-user-form'); // Redirect back to the form
        exit();
            }
        }









    public function fetchUsers() {
        try {
            $dbConnection = db_conn::getConnection();
            
            // Prepare SQL query
            $query = "SELECT * FROM users";
    
            // Execute the query using PDO
            $statement = $dbConnection->query($query);
    
            // Fetch data as associative array
            $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
            // Close the database connection properly
            $dbConnection = null;
    
            // Set response header to JSON
            header('Content-Type: application/json');
    
            // Output data as JSON
            echo json_encode($data);
            exit; // Ensure no further output after sending JSON response
        } catch (PDOException $e) {
            // Handle any database connection errors
            http_response_code(500); // Internal Server Error
            echo json_encode(array($data));
            exit; // Ensure no further output after sending JSON error response
        }
    }

    public function userUpdate(){

    }
 
    

}


