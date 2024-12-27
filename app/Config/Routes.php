<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/signup', "UserController::showRegistrationForm");
$routes->get('/login', "UserController::showLoginForm");

$routes->post('/signup', "UserController::register");