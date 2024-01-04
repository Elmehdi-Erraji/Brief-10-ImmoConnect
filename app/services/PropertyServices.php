<?php 

namespace App\services;

use App\config\db_conn;
use PDO;
use PDOException;
use App\DAO\PropertyDAO;
use App\models\Image;

class PropertyServices implements PropertyDAO{

        private $connection;

        public function __construct(){
            $this->connection=db_conn::getconnection();
        }



    public function create($property,$imgUrl){
       
        $stmt=$this->connection->prepare("INSERT INTO properties(adress,surface,room,shower,price,statut,type,description,user_id) Values(:adress,:surface,:room,:shower,:price,:statut,:type,:description,:user_id)");
        
        $adress = $property->getAdress();
        $surface = $property->getSurface();
        $room = $property->getRoom();
        $shower = $property->getShower();
        $price = $property->getPrice();
        $statut = $property->getStatut();
        $type = $property->getType();
        $description = $property->getDescription();
        $user_id = $property->getUser_id();

        $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':surface', $surface, PDO::PARAM_STR);
        $stmt->bindParam(':room', $room, PDO::PARAM_INT);
        $stmt->bindParam(':shower', $shower, PDO::PARAM_INT);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':statut', $statut, PDO::PARAM_INT);
        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
       
        $stmt->execute();
        $lasInsertId =$this->connection->lastInsertId();
        $stmt=$this->connection->prepare("INSERT INTO images Values(null,:imgUrl,:property_id)");
        
        $stmt->bindParam(':imgUrl',$imgUrl,PDO::PARAM_STR);
        $stmt->bindParam(':property_id',$lasInsertId,PDO::PARAM_INT);
        $stmt->execute();
       
        
      
    }

 

    public function getPropertyById($id){
        $stmt=$this->connection->prepare("SELECT * FROM properties WHERE id=:id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


      
        
    }

    public function update($property,$image){
        $stmt=$this->connection->prepare("UPDATE properties SET adress=:adress,surface=:surface,room=:room,shower=:shower,price=:price,statut=:statut,type=:type,description=:description,user_id=:user_id  WHERE id=:id");
        
        $adress = $property->getAdress();
        $surface = $property->getSurface();
        $room = $property->getRoom();
        $shower = $property->getShower();
        $price = $property->getPrice();
        $statut = $property->getStatut();
        $type = $property->getType();
        $description = $property->getDescription();
        $user_id = $property->getUser_id();
        $id=$property->getId();



        $stmt->bindParam(':adress',$adress,PDO::PARAM_STR);
        $stmt->bindParam(':surface',$surface,PDO::PARAM_STR);
        $stmt->bindParam(':room',$room,PDO::PARAM_STR);
        $stmt->bindParam(':shower',$shower,PDO::PARAM_STR);
        $stmt->bindParam(':price',$price,PDO::PARAM_STR);
        $stmt->bindParam(':statut',$statut,PDO::PARAM_STR);
        $stmt->bindParam(':type',$type,PDO::PARAM_STR);
        $stmt->bindParam(':description',$description,PDO::PARAM_STR);
        $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            error_log("error updating:" . $e->getMessage());
        }
        $stmt=$this->connection->prepare("UPDATE images SET ImgUrl=:ImgUrl WHERE propreties_id=:id");

        $ImgUrl=$image->getImgUrl();

        $stmt->bindParam(':ImgUrl',$ImgUrl,PDO::PARAM_STR);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);

    }


    public function delete($property){

        $stmt=$this->connection->prepare("DELETE FROM properties WHERE id=:id");
        $id=$property->getId();
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error deleting property: " . $e->getMessage());
            return false;
        }

        $stmt=$this->connection->prepare("DELETE FROM images WHERE properties_id=:properties_id");
        $stmt->bindParam(':properties_id',$id,PDO::PARAM_INT);
        try {
            $stmt->execute();
           
            return true;
        } catch (PDOException $e) {
            error_log("Error deleting related images: " . $e->getMessage());
          
            return false;
        }

        
    }

    public function getAllPropreties() {
        $stmt = $this->connection->prepare("SELECT properties.*, images.imgUrl FROM properties JOIN images ON properties.id = images.properties_id");
        $stmt->execute();
    
        // Fetch the results as an associative array
        $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $properties;
    }

}