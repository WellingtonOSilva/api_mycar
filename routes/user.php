<?php 

$router->get('/user', 'UsersController@all');

$router->get('/user/{id}', 'UsersController@one');

$router->post('/user', 'UsersController@create');