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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/driver', 'DriverController@all');

$router->get('/driver/{id}', 'DriverController@one');

$router->get('/races', 'RacesController@all');

$router->get('/races/{id}', 'RacesController@one');

$router->get('/passenger', 'PassengerController@all');

$router->get('/passenger/{id}', 'PassengerController@one');

