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

    public function getUserById($id){
        echo $id;
    }
    public function updateUser(User $user){
        echo $user->getUsername();
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



    public static function getAllUsers() {
        $connection = db_conn::getConnection();
        $users = [];
    
        $query = "SELECT * FROM users";
    
        $statement = $connection->query($query);
    
        if ($statement) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $user = new User(
                    $row['username'],
                    $row['email'],
                    $row['phone_number'],
                    $row['password'],
                    $row['image'],
                    $row['statut'],
                    $row['role_id']
                );
    
                // Optionally, you can set the 'id' using setId method if needed
                $user->setId($row['id']);
    
                $users[] = $user;
            }
        }
    
        return $users;
    }
    
    public function deleteUser($userId) {
        $connection = db_conn::getConnection();

       
        $deleteUserQuery = "DELETE FROM users WHERE id = :userId";
        $stmtUser = $connection->prepare($deleteUserQuery);
        $stmtUser->bindParam(':userId', $userId, PDO::PARAM_INT);
        $successUser = $stmtUser->execute();

        // Check if both delete operations were successful
        if ($successUser) {
            return true; // Deletion successful
        } else {
            return false; // User not found or deletion failed
        }
    }
    
}