<?php
namespace App\controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

class HomeController{
    public function index(){
        include __DIR__ .'../../../views/profile.php';
    }
 
    public function user(){
        include __DIR__ .'../../../views/chat/users.php';
    }


    public function userAdd(){
        include __DIR__ .'../../../views/admin/user-add.php';
    }

    public function userList(){
        include __DIR__ .'../../../views/admin/user-list.php';
    }
    public function Update(){
       
        include __DIR__ .'../../../views/admin/user-update.php';
    }
    public function profile(){
       
        include __DIR__ .'../../../views/admin/profile.php';
    }


    public function new_property(){

        include __DIR__ .'../../../views/properties/new_property.php';
    }
    // public function list(){
    //     include __DIR__ .'../../../views/list.php';
    // }
}
