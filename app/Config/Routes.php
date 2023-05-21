<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->setAutoRoute(true);
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
//$routes->setDefaultController('Home');
$routes->setDefaultController('User');

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
//$routes->get('/', 'Home::index');

//Users
$routes->get('/users/index', 'User::index');
$routes->get('/user/create', 'User::create');
$routes->post('/user/save', 'User::save');

//User/view
$routes->get('/user/view/{:num}', 'User::view/$1');
$routes->get('/user/edit/{:num}', 'User::edit/$1');
$routes->post('/user/update/{:num}', 'User::update/$1');

//Form
$routes->get('contact-form', 'FormController::index');
$routes->match(['get', 'post'], 'FormController/store', 'FormController::store');


//Products
$routes->get('/', 'ProductController::index');
$routes->get('/product/create', 'ProductController::create');
$routes->post('/product/ajay', 'ProductController::ajay');



//Cart
$routes->get('/cart', 'CartController::index');
$routes->get('/cart/db', 'CartController::db');
    
//$routes->resource('post', ['websafe' => 1]);
//$routes->resource('post');

/*
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




//User & Admin Modules Config in Modules folder in root dir
// include User module 
if (file_exists(ROOTPATH . 'modules/User/Config/Routes.php')){
  require ROOTPATH . 'modules/User/Config/Routes.php';
}


// include Admin module 
if (file_exists(ROOTPATH . 'modules/Admin/Config/Routes.php')){
  require ROOTPATH . 'modules/Admin/Config/Routes.php';
}


