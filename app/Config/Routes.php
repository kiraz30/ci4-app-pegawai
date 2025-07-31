<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('jabatan/v1', function($routes){
    $routes->get('/','JabatanController::index');
    $routes->get('detail/(:num)','JabatanController::show/$1');
    $routes->get('create','JabatanController::create');
    $routes->post('store','JabatanController::store');
    $routes->get('edit/(:num)','JabatanController::edit/$1');
    $routes->post('update/(:num)','JabatanController::update/$1');
    $routes->post('delete/(:num)','JabatanController::delete/$1');

});


$routes->group('pegawai/v1', function($routes){
    $routes->get('/','PegawaiController::index');
    $routes->get('detail/(:num)','PegawaiController::show/$1');
    $routes->get('create','PegawaiController::create');
    $routes->post('store','PegawaiController::store');
    $routes->get('edit/(:num)','PegawaiController::edit/$1');
    $routes->post('update/(:num)','PegawaiController::update/$1');
    $routes->post('delete/(:num)','PegawaiController::delete/$1');

});
 