<?php namespace Config;

// Create a new instance of our RouteCollection class.
use function foo\func;

$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/users', 'UserController::listUser');
$routes->get('/login','Home::viewLogin');
$routes->get('/gestion_utilisateurs','Home::viewManageUsers');
$routes->get('/gestion_prospects','Home::viewManageProspects');
$routes->get('/logout','UserController::logout');



$routes->post('/user/create','UserController::create');
$routes->post('/user/edit','UserController::edit');
$routes->post('/user/(:num)/delete','UserController::delete/$1');
$routes->post('/user/login','UserController::login');

$routes->post('/prospect/create','ProspectController::create');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
