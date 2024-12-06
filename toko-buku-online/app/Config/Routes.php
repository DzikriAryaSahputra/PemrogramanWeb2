<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  HOME ROUTES
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
service('auth')->routes($routes);
$routes->post('submit', 'Home::submit');

// ADMIN ROUTES
$routes->get('/admin','AdminController::databuku');