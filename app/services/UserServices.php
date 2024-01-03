<?php


namespace app\services;
require_once __DIR__ . '/../../vendor/autoload.php';

use app\Models\User;

use app\DAO\UserDAO;

use app\config\db_conn;


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
    public function deleteUser($id) {
        echo $id;
    }
    
}