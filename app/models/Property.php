<?php 

namespace App\models;



 class Property  {
    
    private $id;
    private $adress;
    private $surface;
    private $room;
    private $shower;
    private $price;
    private $statut;
    private $type;
    private $description;
    private $user_id;


    public function __construct($id=null,$adress=null,$surface=null,$room=null,$shower=null,$price=null,$statut=null,$type=null,$description=null,$user_id=null)
    {
        $this->id=$id;
        $this->adress=$adress;
        $this->surface=$surface;
        $this->room=$room;
        $this->shower=$shower;
        $this->price=$price;
        $this->statut=$statut;
        $this->type=$type;
        $this->description=$description;
        $this->user_id=$user_id;
    }


    // get methods
    public function getId(){
        return $this->id;
    }
    public function getAdress(){
        return $this->adress;
    }
    public function getSurface(){
        return $this->surface;
    }
    public function getRoom(){
        return $this->room;
    }
    public function getShower(){
        return $this->shower;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getStatut(){
        return $this->statut;
    }
    public function getType(){
        return $this->type;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getUser_id(){
        return $this->user_id;
    }

    // set methods
    public function setAdress($adress){
        $this->adress=$adress;
    }
    public function setSurface($surface){
        $this->surface=$surface;
    }
    public function setRoom($room){
        $this->room=$room;
    }
    public function setShower($shower){
        $this->shower=$shower;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setStatut($statut){
        $this->statut=$statut;
    }
    public function setType($type){
        $this->type=$type;
    }
    public function setDescription($description){
        $this->description=$description;
    }
   

 
    
   

 }
