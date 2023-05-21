<?php

namespace Modules\Admin\Config;

//use Modules\Admin\Controllers;

    $routes->group('admins', ['namespace' => 'Modules\Admin\Controllers'], static function($routes)
    {

         $routes->get('/', 'Admin::index');
       
         //$routes->get('admins/(:any)', 'Admin::view/$1');
         //$routes->get('dashboard', 'Admin::dashboard', ['as' => 'dashboard']);
         //$routes->get('/', '\Modules\User\Controllers\User::index');
         	//$routes->get('/', '\Modules\User\Controllers\User::index');
	//$routes->post('/blog', '\Modules\User\Controllers\User::index');

    });
   




