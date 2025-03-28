<?php

$url = isset($_GET['url']) ? $_GET['url'] : 'home';


$urlParts = explode('/', rtrim($url, '/'));

$controllerName = ucfirst(array_shift($urlParts)) . 'Controller';

$controllerFile = '../app/controllers/' . $controllerName . '.php';


$actionName = array_shift($urlParts) ?: 'index';


if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $controller = new $controllerName();
    if (method_exists($controllerName, $actionName)) {
        $controller->$actionName();
    } else {
        echo 'este metodo no existe';
    }
} else {
    echo 'no existo';
}
