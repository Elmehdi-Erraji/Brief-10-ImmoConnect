<?php 

namespace App\DAO;

use App\models\Property;
use App\models\Image;

interface PropertyDAO{
    public function create(Property $property,$imgUrl);
    public function getPropertyById($id);
    public function getAllPropreties();
    public function update(Property $property,Image $image);
    public function delete(Property $property); 

}
