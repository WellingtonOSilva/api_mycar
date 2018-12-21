<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

include 'user.php';

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/driver', 'DriversController@all');

$router->get('/driver/{id}', 'DriversController@one');

$router->get('/trip', 'TripsController@all');

$router->get('/trip/{id}', 'TripsController@one');

$router->get('/passenger', 'PassengersController@all');

$router->get('/passenger/{id}', 'PassengersController@one');

$router->get('/permission', 'PermissionsController@all');

$router->get('/permission/{id}', 'PermissionsController@one');
