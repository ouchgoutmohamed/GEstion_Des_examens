<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::loginForm'); 
$routes->get('signup', 'SignupController::loginForm'); 

