<?php

declare(strict_types=1);
require_once '../vendor/autoload.php';
require_once '../src/config/constants.php';


session_start();

if (!isset($_SESSION['isAuth'])) {
    $_SESSION['isAuth'] = 0;
}


$url = isset($_GET['url']) ? $_GET['url'] : 'home';


$urlParts = explode('/', rtrim($url, '/'));

$controllerName = ucfirst(array_shift($urlParts)) . 'Controller';

$controllerClass = 'System\\App\Controllers\\' . $controllerName;

$actionName = array_shift($urlParts) ?: 'index';


if (class_exists($controllerClass)) {

    $controller = new $controllerClass();
    if (method_exists($controllerClass, $actionName)) {
        $controller->$actionName();
    } else {
        echo 'este metodo no existe';
    }
} else {
    echo 'Este enlace no existe';
}
