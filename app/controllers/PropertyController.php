<?php

namespace app\controllers;

use app\models\Property;
use app\services\PropertyServices;

require './vendor/autoload.php';

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
        


        $property=new Property($adress,$surface,$room,$shower,$price,$statut,$type,$description,$user_id);

        $propertyService=new PropertyServices();

        $result=$propertyService->create($property);

        if($result){
            header('Location:/../index.html');
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