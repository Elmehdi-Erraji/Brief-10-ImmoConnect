<?php
namespace app\controllers;
class AuthController{
    public function signup(){
        include __DIR__ .'../../../views/auth/register.php';
    }
    public function signin(){
        include __DIR__ .'../../../views/auth/login.php';
    }
}