<?php
include('router/Router.php');

$router = new Router();

$router->addRoute('/home', 'HomeController');
$router->addRoute('/about', 'AboutController');
$router->addRoute('/contact', 'ContactController');

$url = $_SERVER['REQUEST_URI'];


$router->dispatch($url);
