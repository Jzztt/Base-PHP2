<?php


require_once __DIR__ . '/../app/helpers.php';

$router = new \Bramus\Router\Router();

$router->get('/', function () {
    echo "Hello world";
});

// mount
// $router->mount('/products', function () use ($router) {

// });


$router->run();
