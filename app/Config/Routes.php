<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta para Usuario
$routes->get('/', 'Home::index'); 

$routes->get('/usuario/login','UserController::index');
$routes->post('/usuario/login','UserController::index');

//ruta cerrar sesion
$routes->get('auth/logout', 'AuthController::logout');

// Ruta
$routes->get('/', 'Home::index');

$routes->group('biblioteca', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('mostrar', 'Biblioteca::mostrar'); 
    $routes->get('agregar', 'Biblioteca::agregar'); 
    $routes->post('insert', 'Biblioteca::insert');  
    $routes->get('delete/(:num)', 'Biblioteca::delete/$1');
    $routes->get('editar/(:num)', 'Biblioteca::editar/$1');
    $routes->post('update', 'Biblioteca::update');  
    $routes->get('buscar', 'Biblioteca::buscar');   
});

// rutas de Reseña 
$routes->get('/', 'Home::index');

$routes->group('reseña', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('mostrar', 'Reseña::mostrar');
    $routes->get('agregar', 'Reseña::agregar');
    $routes->post('insert', 'Reseña::insert');
    $routes->get('delete/(:num)', 'Reseña::delete/$1');
    $routes->get('editar/(:num)', 'Reseña::editar/$1');
    $routes->post('update', 'Reseña::update');
    $routes->get('buscar', 'Reseña::buscar');
}); 

// rutas de Prestamos 
$routes->get('/', 'Home::index');

$routes->group('prestamo', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('mostrar', 'Prestamo::mostrar');
    $routes->get('agregar', 'Prestamo::agregar');
    $routes->post('insert', 'Prestamo::insert');
    $routes->get('delete/(:num)', 'Prestamo::delete/$1');
    $routes->get('editar/(:num)', 'Prestamo::editar/$1');
    $routes->post('update', 'Prestamo::update');
    $routes->get('buscar', 'Prestamo::buscar');
}); 

// rutas de Multas
$routes->get('/', 'Home::index');

$routes->group('multa', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('mostrar', 'Multa::mostrar');
    $routes->get('agregar', 'Multa::agregar');
    $routes->post('insert', 'Multa::insert');
    $routes->get('delete/(:num)', 'Multa::delete/$1');
    $routes->get('editar/(:num)', 'Multa::editar/$1');
    $routes->post('update', 'Multa::update');
    $routes->get('buscar', 'Multa::buscar');
}); 
