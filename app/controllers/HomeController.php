<?php
namespace App\controllers;
class HomeController{
    public function index(){
        include __DIR__ .'../../../views/profile.php';
    }
    public function user(){
        include __DIR__ .'../../../views/chat/users.php';
    }
}