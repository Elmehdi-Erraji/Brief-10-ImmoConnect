<?php
namespace App\controllers;
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
       
        include __DIR__ .'../../../views/profile.php';
    }


}