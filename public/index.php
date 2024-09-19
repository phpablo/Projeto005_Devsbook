<?php
// init session
session_start();
require '../vendor/autoload.php';
require '../src/routes.php';

// rota 
$router->run($router->routes);
