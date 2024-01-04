<?php
namespace App\controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\models\Message;
use App\services\MesageService;
use App\Controllers\UserController;


class MessageController{
    
    public function user(){
        $userController = new UserController();
        $users = $userController->getUsers();

        include __DIR__ .'../../../views/chat/users.php';
    }
    public function insertMsg(){
        if (isset($_POST['send'])) {
            $postData = $_POST ?? [];
            $messageContent =  $postData['message'] ?? '';
            $sendTime = date("Y-m-d H:i:s"); // Récupération de l'heure actuelle
            $sender_id = $postData['outgoing_id'] ?? '';
            $receiver_id = $postData['incoming_id'] ?? '';
            // var_dump($messageContent ,
            // $sendTime ,
            // $sender_id ,
            // $receiver_id );
        
            $msg = new Message($messageContent, $sendTime, $sender_id, $receiver_id);
            $messageService = new  MesageService();
            $result= $messageService->creatMessage($msg);
             
        
        if ($result) {
            // User created successfully
            header('location:message?id='. $receiver_id);
            exit();
        } else {
            return false;
        }
    }
}
    
 
    public function allMsgs() {
        
        session_start();
          
            $receiver_id = $_GET['id'] ?? '';
            $sender_id = $_SESSION['user_id'];
    
          
    
            $messageService = new MesageService();
            $mesgs = $messageService->getMessagesById($sender_id, $receiver_id);
    
            if ($mesgs) {
                include __DIR__ .'../../../views/chat/chat.php';
            } else {
                include __DIR__ .'../../../views/chat/chat.php';
            }

 
   
    }
   
 }