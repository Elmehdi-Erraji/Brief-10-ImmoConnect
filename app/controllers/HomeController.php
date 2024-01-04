<?php
namespace App\controllers;
require_once __DIR__ . '/../../vendor/autoload.php';

class HomeController{
    public function index(){
        include __DIR__ .'../../../views/profile.php';
    }

 }