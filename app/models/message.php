<?php
namespace app\models;

class Message{
    private $id;
    private $message;
    private $sender_id;
    private $sendTime;
    private $reciever_id;
    
    public function __construct($id, $message, $sendTime, $sender_id, $reciever_id){
        $this->id = $id;
        $this->message = $message;
        $this->sendTime = $sendTime;
        $this->sender_id = $sender_id;
        $this->reciever_id = $reciever_id;
    }
    
    // Getter and Setter for $id
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    // Getter and Setter for $message
    public function getMessage(){
        return $this->message;
    }
    public function setMessage($message){
        $this->message = $message;
    }
    
    // Getter and Setter for $sender_id
    public function getSenderId(){
        return $this->sender_id;
    }
    public function setSenderId($sender_id){
        $this->sender_id = $sender_id;
    }
    
    // Getter and Setter for $sendTime
    public function getSendTime(){
        return $this->sendTime;
    }
    public function setSendTime($sendTime){
        $this->sendTime = $sendTime;
    }
    
    // Getter and Setter for $reciever_id
    public function getReceiverId(){
        return $this->reciever_id;
    }
    public function setReceiverId($reciever_id){
        $this->reciever_id = $reciever_id;
    }
}



