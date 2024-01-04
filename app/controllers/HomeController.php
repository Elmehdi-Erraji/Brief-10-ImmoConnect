<?php
namespace App\controllers;
class HomeController{
    public function index(){
        include __DIR__ .'../../../views/profile.php';
    }
    public function user(){
        include __DIR__ .'../../../views/chat/users.php';
    }
    public function new_property(){

        include __DIR__ .'../../../views/properties/new_property.php';
    }
    // public function list(){
    //     include __DIR__ .'../../../views/list.php';
    // }
}