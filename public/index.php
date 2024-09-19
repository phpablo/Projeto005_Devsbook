<?php
session_start();
require '../vendor/autoload.php';
require '../src/routes.php';

// rota principal
$router->run($router->routes);
