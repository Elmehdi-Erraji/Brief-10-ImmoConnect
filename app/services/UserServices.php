<?php


namespace App\services;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\User;

use App\DAO\UserDAO;

use App\config\db_conn;
use PDO;
use PDOException;

class UserServices implements UserDAO{

    private $db;

    public function __construct()
    {
        $this->db = db_conn::getConnection(); // Get database connection from DbConn class
    }
   public function createUser(User $user){
        $username = $user->getUsername();
        $email = $user->getEmail();
        $phone_number = $user->getPhoneNumber();
        $password = $user->getPassword();
        $image = null;
        $status = $user->getStatut();
        $role_id = $user->getRoleId();

        $query = "INSERT INTO users (username, email, phone_number, password, image, statut, role_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            
            return false;
        }

        $success = $stmt->execute([$username, $email, $phone_number, $password, $image, $status, $role_id]);

        if ($success) {
            return true; // User created successfully
        } else {
            return false; // User creation failed
        }
   }

   public function getUserById($id) {
    $query = "SELECT * FROM users WHERE id = :id";

    try {
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ? $user : null; // Return the user details as an associative array or null if not found
    } catch (PDOException $e) {
        // Handle the exception or log the error
        return null; // Return null if an exception occurs
    }
}
    public function updateUser(User $user){
        echo $user->getUsername();
    }
    public function deleteUser($id) {
        echo $id;
    }


    public function getUserByEmail($email) {
        try {
            $query = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($user) {
                return $user; // Return the user details as an associative array
            } else {
                return null; // User not found
            }
        } catch (PDOException $e) {
            // Handle the exception appropriately
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    public function getAllUsers() {
        try {
            $query = "SELECT * FROM users";
            $stmt = $this->db->query($query);
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users; // Return an array of users' details
        } catch (PDOException $e) {
            // Handle the exception appropriately
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    
}