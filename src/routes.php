<?php
/*
:sparkles: Add routes and functions for user registration

- Added routes and functions to handle user registration
- Implemented verification logic to check if a user already exists
- Ensured consistent pattern for user existence verification

*/

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');
