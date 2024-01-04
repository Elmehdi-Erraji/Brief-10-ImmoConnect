<?php 

namespace App\models;



class Image  {
    
    private $id;
    private $imgUrl;
    private $property_id;


    public function __construct($id=null,$imgUrl=null,$property_id=null)
    {
        $this->id=$id;
        $this->imgUrl=$imgUrl;
        $this->property_id=$property_id;
    }

    public function getId(){
        return $this->id;
    }
    public function getImgUrl(){
        return $this->imgUrl;
    }
    public function getProperty_id(){
        return $this->property_id;
    }



}