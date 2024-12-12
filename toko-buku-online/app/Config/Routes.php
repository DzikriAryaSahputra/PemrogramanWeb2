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
$routes->post('submit', 'Home::submit');
service('auth')->routes($routes);



// ADMIN ROUTES
$routes->group('admin',['filter'=> 'group:admin'],function($routes){

  $routes->get('databuku','AdminController::databuku');
  $routes->get('','AdminController::databuku');
  $routes->get('pelanggan','AdminController::pelanggan');
  $routes->get('dashboard','AdminController::dashboard');
  $routes->get('transaksi','AdminController::transaksi');

});
