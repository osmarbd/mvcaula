<?php
//require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0]: 'home'; //Controller - Classe
$action = isset($url[1]) && $url[1] ? $url[1] : 'index'; // método
$param = isset($url[2]) && $url[2] ? $url[2] : null; // parâmetro

if(!class_exists($controller = "Code\Controller\\" . ucfirst($controller) . 'Controller')){
    print (new \Code\View\View('404.php'))->render();
    die();
}

if(!method_exists($controller, $action)){
    $action = 'index';
    $param = $url[1];
}

$response = call_user_func_array([new $controller, $action],[$param]);

echo $response;



