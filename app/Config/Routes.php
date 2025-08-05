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
$routes->get('/bienvenida', 'Servicio\Ejemplo::bienvenida');
$routes->get('/jsonResponse', 'Servicio\Ejemplo::jsonBienvenida');
$routes->get('/jsonTexto/(:segment)', 'Servicio\Ejemplo::jsonTexto/$1');
<<<<<<< HEAD
$routes->get('/jsonTexto', 'Servicio\Ejemplo::jsonTexto');
=======
$routes->get('/jsonTexto', 'Servicio\Ejemplo::jsonTexto');

//
$routes->post('/','Servicio\spusuario::usuario');
>>>>>>> fcf3659659c4575ff84acce4a702f6afee285271

$routes->post('/', 'Servicio\christian::usercris');