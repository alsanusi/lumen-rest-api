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

// Index
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Penceramah
$router->post('/penceramah', 'PenceramahController@create');
$router->get('/penceramah', 'PenceramahController@index');
$router->get('/penceramah/{id}', 'PenceramahController@show');
$router->put('/penceramah/{id}', 'PenceramahController@update');
$router->delete('/penceramah/{id}', 'PenceramahController@delete');

// Users
$router->post('/register', 'UserController@register');