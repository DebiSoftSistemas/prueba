<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Home::welcome');
$routes->get('/rothman', 'Rothman::vista');
$routes->get('/sp','SPController::index');
$routes->get('/christian', 'YSchristian::vista');
$routes->get('/vacio', 'Rothman::vacio');

// Servicios
$routes->get('/bienvenida', 'Servicio/Ejemplo::bienvenida');
