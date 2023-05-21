<?php

namespace Modules\User\Config;

use Modules\User\Controllers;

    $routes->group('/users', ['namespace' => 'Modules\User\Controllers'], static function($routes)
    {
         $routes->get('/', 'User::index');
         //$routes->get('/', '\Modules\User\Controllers\User::index');
    });
   
	//$routes->get('/', '\Modules\User\Controllers\User::index');
	//$routes->post('/blog', '\Modules\User\Controllers\User::index');


?>


