<?php 

namespace app\models;

use app\config\db_conn;
use app\DAO\PropertyDAO;
use PDO;
use PDOException;

 class Property implements PropertyDAO {
    
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
   

    // Crud methods
    
   
    public function create($property){
        $connection=db_conn::getconnection();
        $stmt=$connection->prepare(query:"INSERT INTO properties Values(null,:adress,:surface,:room,:shower,:price,:statut,:type,:description,:user_id)");
        $stmt->bindParam(':adress',$property->getAdress(),PDO::PARAM_STR);
        $stmt->bindParam(':surface',$property->getSurface(),PDO::PARAM_STR);
        $stmt->bindParam(':room',$property->getRoom(),PDO::PARAM_STR);
        $stmt->bindParam(':shower',$property->getShower(),PDO::PARAM_STR);
        $stmt->bindParam(':price',$property->getPrice(),PDO::PARAM_STR);
        $stmt->bindParam(':statut',$property->getStatut(),PDO::PARAM_STR);
        $stmt->bindParam(':type',$property->getType(),PDO::PARAM_STR);
        $stmt->bindParam(':description',$property->getDescription(),PDO::PARAM_STR);
        $stmt->bindParam(':user_id',$property->getUser_id(),PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            echo"error inserting property:" . $e->getMessage();
        }
    }

    public function delete($property){
        $connection=db_conn::getconnection();
        $stmt=$connection->prepare(query:"DELETE FROM properties WHERE id=:id");
        $stmt->bindParam(':id',$property->getId(),PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            echo"error deleting property:" . $e->getMessage();
        }
        
    }

    public function getPropertyById($id){
        $connection=db_conn::getconnection();
        $stmt=$connection->prepare(query:"SELECT * FROM properties WHERE id=:id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        try{
            $stmt->execute($id);
        }
        catch(PDOException $e){
            echo"error geting property by id:" . $e->getMessage();
        }
        
    }

    public function update($property){
        $connection=db_conn::getconnection();
        $stmt=$connection->prepare(query:"UPDATE properties SET adress=:adress,surface=:surface,room=:room,shower=:shower,price=:price,statut=:statut,type=:type,description=:description,user_id=:user_id  WHERE id=:id");
        $stmt->bindParam(':adress',$property->getAdress(),PDO::PARAM_STR);
        $stmt->bindParam(':surface',$property->getSurface(),PDO::PARAM_STR);
        $stmt->bindParam(':room',$property->getRoom(),PDO::PARAM_STR);
        $stmt->bindParam(':shower',$property->getShower(),PDO::PARAM_STR);
        $stmt->bindParam(':price',$property->getPrice(),PDO::PARAM_STR);
        $stmt->bindParam(':statut',$property->getStatut(),PDO::PARAM_STR);
        $stmt->bindParam(':type',$property->getType(),PDO::PARAM_STR);
        $stmt->bindParam(':description',$property->getDescription(),PDO::PARAM_STR);
        $stmt->bindParam(':user_id',$property->getUser_id(),PDO::PARAM_INT);
        $stmt->bindParam(':id',$property->getId(),PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            echo"error updating:" . $e->getMessage();
        }
        
    }
 }
