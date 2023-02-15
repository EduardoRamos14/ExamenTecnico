<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/inicio_compras', 'Home::inicio_compras');
$routes->get('/inicio_almacenes', 'Home::inicio_almacenes');
$routes->get('/inicio_abastecimiento', 'Home::inicio_abastecimiento');

$routes->get('/usuario_compras', 'Home::usuario_compras');
$routes->get('/usuario_almacenes', 'Home::usuario_almacenes');
$routes->get('/usuario_abastecimiento', 'Home::usuario_abastecimiento');

//$routes->get('/error_archivo', 'Home::error_archivo');
$routes->get('/vista_respuesta/(:segment)', 'Res::vista_respuesta/$1');


$routes->post('/login', 'Home::login');
$routes->get('/menu', 'Home::menu');//menu
$routes->get('/salir', 'Home::salir');


$routes->get('/download/(:segment)', 'Reg::download/$1');//rutas con segmento de url que se envia por parametro
$routes->get('/download/(:segment)', 'Res::download/$1');

$routes->get('/update_status/(:num)/(:num)', 'Reg::update_status/$1/$1');
$routes->get('/update_status', 'Reg::update_status');
$routes->get('/search', 'search::searchResults');

//$routes->get('/Res', 'Home::Res');
//$routes->get('/inicio', 'Reg::index');


$routes->setAutoRoute(true);


$routes->resource('Reg');
$routes->resource('Res');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
