<?php
namespace App\models;
include __DIR__ . '../../../vendor/autoload.php';

use App\config\db_conn;
use App\entities\Message;
use PDO, PDOException;
class MessageModels {
    private $database;
    public function __construct()
    {
        $this->database= db_conn::getConnection();
    }

    public function creatUser(Message $msg) {
        try{
        $query = "INSERT INTO `message_user`( `message`, `sendTime`, `sender_Id`, `reciever_Id`) VALUES (?,?,?,?)";
        $stmt = $this->database->prepare($query);
        $result=$stmt->execute([$msg->getMessage(),$msg->getSendTime(),$msg->getSenderId(),$msg->getReceiverId()]);
        return $result;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
}

