<?php 

namespace app\DAO;

use app\models\Property;

interface PropertyDAO{
    public function create(Property $property,$imgUrl);
    public function getPropertyById($id);
    public function getAllPropreties();
    public function update(Property $property);
    public function delete(Property $property); 
}
