<?php 

namespace app\services;

use app\config\db_conn;
use PDO;
use PDOException;
use app\DAO\PropertyDAO;

class PropertyServices implements PropertyDAO{

        private $connection;

        public function __construct(){
            $this->connection=db_conn::getconnection();
        }



    public function create($property){
       
        $stmt=$this->connection->prepare(query:"INSERT INTO properties Values(null,:adress,:surface,:room,:shower,:price,:statut,:type,:description,:user_id)");
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
            error_log("error inserting property:" . $e->getMessage());
        }
    }

    public function delete($property){
        $stmt=$this->connection->prepare(query:"DELETE FROM properties WHERE id=:id");
        $stmt->bindParam(':id',$property->getId(),PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            error_log("error deleting property:" . $e->getMessage());
        }
        
    }

    public function getPropertyById($id){
        $stmt=$this->connection->prepare(query:"SELECT * FROM properties WHERE id=:id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            error_log("error geting property by id:" . $e->getMessage());
        }
        
    }

    public function update($property){
        $stmt=$this->connection->prepare(query:"UPDATE properties SET adress=:adress,surface=:surface,room=:room,shower=:shower,price=:price,statut=:statut,type=:type,description=:description,user_id=:user_id  WHERE id=:id");
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
            error_log("error updating:" . $e->getMessage());
        }
        
    }

}