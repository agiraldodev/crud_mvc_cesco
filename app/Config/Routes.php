<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Ruta para los productos
$routes->get('/productos/nuevo', 'ProductoController::crear');

$routes->post('/productos/crear', 'ProductoController::guardarProducto');

