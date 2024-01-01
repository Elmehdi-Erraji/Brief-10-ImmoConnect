<?php

namespace MVC\Routes;

use App\Controllers\UserController;
class Route
{
    public function __construct()
    {
        $this->handleRoutes();
    }

    public function handleRoutes()
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/Brief-10-ImmoConnect/';
        $uri = explode('/Brief-10-ImmoConnect/', trim(strtolower($uri),'/'));

        $userController = new UserController();

        //route handling based on URL segments

        switch ($uri[1]) {
            case 'register':
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $userController->createUser($_POST);
            }else{
                $userController->showRegisterForm();
            }
            break;
            default:
            echo "404 - Not Found";
            break;
    }
}
}