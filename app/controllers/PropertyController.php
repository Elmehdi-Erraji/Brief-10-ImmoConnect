<?php

namespace app\controllers;

use app\models\Property;
use app\services\PropertyServices;

require '../../vendor/autoload.php';

class PropertyController{

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

        $images = ['image1', 'image2', 'image3']; // Assuming your form input names are image1, image2, image3

        $uploadedImages = [];
    
        foreach ($images as $imageName) {
            $image = $_FILES[$imageName]['name'];
            $temp_name = $_FILES[$imageName]['tmp_name'];
    
            $imagePath = "../../public/upload/$image";
            move_uploaded_file($temp_name, $imagePath);
    
            $uploadedImages[] = $imagePath;
        }
        


        $property=new Property(null,$adress,$surface,$room,$shower,$price,$statut,$type,$description,$user_id);

        $propertyService=new PropertyServices();

        $result = $propertyService->create($property, $uploadedImages);

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

        $propertyService=new PropertyServices();

        $propertyService->update($property);

      

    }

}