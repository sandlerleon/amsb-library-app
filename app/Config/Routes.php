<?php

use CodeIgniter\Router\RouteCollection;


/** @var RouteCollection $routes */

$routes->setDefaultNamespace('App\Controllers');

$routes->setDefaultController('Home');

$routes->setDefaultMethod('index');

$routes->setTranslateURIDashes(false);

$routes->set404Override();

$routes->get('/', 'Home::index');

$routes->get('shop', 'Shop::index');

$routes->setAutoRoute(true);

$routes->add('book/(:any)/(:any)','Library::book/$1/$2/');

$routes->group('admin', function($routes){
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');
    $routes->add('users/(:any)/(:any)', 'Admin\Library::product/$1/$2');
});        

$routes->get('book', 'Book::index');
$routes->get('book_form', 'Book::bookForm');
$routes->get('book/new', 'Book::createNew');
$routes->post('book/new', 'Book::saveNew');

    
