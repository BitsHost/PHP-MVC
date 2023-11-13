<?php
include('router/Router.php');

$router = new Router();

$router->addRoute('/crud/MVC/router/routerc/home', 'HomeController');
$router->addRoute('/crud/MVC/router/routerc/about', 'AboutController');
$router->addRoute('/crud/MVC/router/routerc/contact', 'ContactController');

$url = $_SERVER['REQUEST_URI'];


$router->dispatch($url);
