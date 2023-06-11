<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

//Router Setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// $routes->setAutoRoute(false);

// Route Definitions

    $routes->group('',["filter" => "auth"], static function($routes){
    $routes->get('/', 'CRUDController::index');
    $routes->get('/tambahdata','CRUDController::tambah');
    $routes->post('/tambahdata','CRUDController::simpan');
    $routes->get('/editdata/(:num)','CRUDController::edit/$1');
    $routes->post('/editdata/(:num)','CRUDController::update/$1');
    $routes->delete('/hapusdata/(:num)','CRUDController::hapus/$1');
    $routes->get('/logout','LoginController::logout');
});

$routes->get('/login','LoginController::index');
$routes->post('/login','LoginController::login');

//Additional Routing
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
