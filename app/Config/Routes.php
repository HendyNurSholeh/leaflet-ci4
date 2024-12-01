<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/input-location', 'Home::inputLocation');
$routes->get('/double-input-location', 'Home::doubleInputLocation');
