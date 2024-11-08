<?php namespace Config;

use CodeIgniter\Router\RouteCollection;

/**

/**
 * @var RouteCollection $routes
 */

$routes = Services::routes();

// Define custom endpoints here
$routes->get('users', 'UserController::index'); // returns a list of all users
