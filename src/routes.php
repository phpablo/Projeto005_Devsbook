<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->post('/post/new', 'PostController@new');

$router->get('/perfil/{id}', 'ProfileController@index');
$router->get('/perfil', 'ProfileController@index');

$router->get('/sair', 'LoginController@logout');

// $router->get('/pesquisa');
// $router->get('/perfil');
// $router->get('/sair');
// $router->get('/amigos');
// $router->get('/fotos');
// $router->get('/config');