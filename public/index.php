<?php
define('APPLICATION_PATH', getcwd(). '/../app/');

require APPLICATION_PATH . '../vendor/autoload.php';

$routes = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = 'Main';
$actionName = 'defaultPage';

//  get controller

if(!empty($routes[1])) {
    $controllerName = ucfirst(strtolower($routes[1]));
}

//  get action

if(!empty($routes[2])) {
    $actionName = $routes[2];
}

$filename = APPLICATION_PATH . "Controllers/" . $controllerName . ".php";

try {
    if(!file_exists($filename)) {
        throw new Exception("Controller file not found");
    }

    $className = '\App\Controllers\\' . $controllerName;

    if(class_exists($className)) {
        $controller = new $className();
    } else {
        throw new Exception("File found but Class not found");
    }

    if(method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        throw new Exception("Method not found");
    }
} catch (Exception $e) {
    require APPLICATION_PATH . 'Errors/404.php';
}
