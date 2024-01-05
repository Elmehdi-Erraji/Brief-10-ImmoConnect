<?php
namespace App\services;

include __DIR__ . '../../../vendor/autoload.php';

use App\config\db_conn;
use App\models\Message;
use PDO, PDOException;


class MesageService {
    private $database;
    public function __construct()
    {
        $this->database= db_conn::getConnection();
    }

    public function creatMessage(Message $msg) {
        try{
        $query = "INSERT INTO `message_user`( `message`, `sendTime`, `sender_Id`, `reciever_Id`) VALUES (?,?,?,?)";
        $stmt = $this->database->prepare($query);
        $result=$stmt->execute([$msg->getMessage(),$msg->getSendTime(),$msg->getSenderId(),$msg->getReceiverId()]);
        return $result;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

public function delete(Message $msg){
    $stmt=$this->database->prepare(query:"DELETE FROM `message` WHERE id=:id");
    $stmt->bindParam(':id',$msg->getId(),PDO::PARAM_INT);
    try{
        $stmt->execute();

    }
    catch(PDOException $e){
        error_log("error deleting property:" . $e->getMessage());
        
    }
    
}
// public function getMessageById($messageId) {
//     try {
//         $query = "SELECT * FROM `message_user` WHERE id = ?";
//         $stmt = $this->database->prepare($query);
//         $stmt->execute([$messageId]);

//         $messageData = $stmt->fetch(PDO::FETCH_ASSOC);

//         if ($messageData) {
//             return new Message(
//                 $messageData['id'],
//                 $messageData['message'],
//                 $messageData['sendTime'],
//                 $messageData['sender_Id'],
//                 $messageData['reciever_Id']
//             );
//         } else {
//             return null;
//         }
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//         return null;
//     }
// }
public function getAllMessages() {
    try {
        $query = "SELECT * FROM `message_user`";
        $stmt = $this->database->query($query);

        $messages = [];

        while ($messageData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $message = new Message(
                $messageData['id'],
                $messageData['message'],
                $messageData['sendTime'],
                $messageData['sender_Id'],
                $messageData['reciever_Id']
            );
            $messages[] = $message;
        }

        return $messages;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}
public function getMessagesById($sender_id, $reciever_Id) {
    try {
        $query = "SELECT * FROM `message_user` 
        WHERE (`sender_Id` = :sender_id AND `reciever_Id` = :reciever_Id) 
        OR (`sender_Id` = :reciever_Id AND `reciever_Id` = :sender_id) 
        ORDER BY id ASC";  
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->bindParam(':reciever_Id', $reciever_Id);
        $var = $stmt->execute();


        $messages = [];

        while ($messageData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $message = new Message(
                $messageData['message'],
                $messageData['sendTime'],
                $messageData['sender_Id'],
                $messageData['reciever_Id'] 
            );
          

            $messages[] = $message;
        }

       return $messages;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}




}

