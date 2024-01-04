<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\routes\Router;

$router = new Router();

$router->setRoutes([
    'GET'=>[
        ''=>['HomeController' , 'index'],
        'home'=>['HomeController' , 'index'],
        'users'=>['HomeController' , 'user'],
        'login'=>['AuthController' , 'signin'],
        'register'=>['AuthController' , 'signup'],
        'forgetPassword'=>['AuthController' , 'forgetPassword'],
        'dashboard'=>['AuthController' , 'dashboard'],
        'fetchUsers'=>['UserController' , 'fetchUsers'],
        'user-add'=>['HomeController' , 'userAdd'],
        'user-list'=>['HomeController' , 'userList'],
        'Delete'=>['UserController' , 'userDelete'],
        'Update'=>['HomeController' , 'Update'],
        'logout'=>['UserController' , 'logout'],
        'profile'=>['HomeController' , 'profile'],
        'new_property'=>['HomeController' , 'new_property'],
        'list'=>['PropertyController' , 'list'],
        'deleteProperty'=>['PropertyController','delete'],
        'message'=>['MessageController', 'allMsgs'],
        

    ],
    'POST'=>[
        'addUser'=>['UserController' , 'addUser'],
        'register'=>['UserController' , 'register'],
        'login'=>['UserController' , 'login'],
        'updateUser'=>['UserController' , 'updateUser'],
        'updateProfile'=>['UserController' , 'updateProfile'],
        'insert'=>['PropertyController' , 'insert'],
        'insertMsg'=>['HomeController', 'insertMsg'],

        
    ]
    
]);
if (isset($_GET['url'])) {
    $uri = trim($_GET['url'], '/');
    $method = $_SERVER['REQUEST_METHOD'];

    try {
        $route = $router->getRoute($method, $uri);
        if ($route) {
            list($controllerName, $methodName) = $route;
            $controllerClass = 'App\\controllers\\' . ucfirst($controllerName);
            $object = new $controllerClass();

            if ($methodName) {
                if (method_exists($object, $methodName)) {
                    $object->$methodName();
                } else {
                    throw new Exception('Method not found in controller.');
                }
            } else {
                $object->index();
            }
        } else {
            throw new Exception('Route not found.');
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
        
    }
} else {
    echo 'error';
}