<?php

namespace App\controllers;

use App\models\Image;
use App\models\Property;
use App\services\PropertyServices;

require '../../vendor/autoload.php';

class PropertyController{

    public function list(){
        include __DIR__ .'../../../views/list.php';
    }

    public function insert(){
        $postData = $_POST ?? [];
        $adress=$postData['adress'] ?? '';
        $surface=$postData['surface'] ?? '';
        $room=$postData['room'] ?? '';
        $shower=$postData['shower'] ?? '';
        $price=$postData['price'] ?? '';
        $statut=$postData['statut'] ?? '';
        $type=$postData['type'] ?? '';
        $description=$postData['description'] ?? '';
        $user_id=$postData['user_id'] ?? '';

        $image=$_FILES['image1']['name'];
        $temp_name=$_FILES['image1']['tmp_name'];

        move_uploaded_file($temp_name,"../../public/upload/$image");
        


        $property=new Property(null,$adress,$surface,$room,$shower,$price,$statut,$type,$description,$user_id);

        $propertyService=new PropertyServices();

        $result=$propertyService->create($property,$image);

        if($result){
            header('');
            exit();
        }     
    }




    public function update(){

        $postData = $_POST ?? [];
        $id=$postData['id'];
        $adress=$postData['adress'] ?? '';
        $surface=$postData['surface'] ?? '';
        $room=$postData['room'] ?? '';
        $shower=$postData['shower'] ?? '';
        $price=$postData['price'] ?? '';
        $statut=$postData['statut'] ?? '';
        $type=$postData['type'] ?? '';
        $description=$postData['description'] ?? '';
        $user_id=$postData['user_id'] ?? '';
        

        $property=new Property($id,$adress,$surface,$room,$shower,$price,$statut,$type,$description,$user_id);
        $image = new Image(null,null,$id);
        $propertyService=new PropertyServices();

        $propertyService->update($property,$image);

    
    }

    public function delete(){
        
       if(isset($_GET['id']))
       {
        $id = $_GET['id'];
        echo $id;
        header("location:profile");
       }
    }

}