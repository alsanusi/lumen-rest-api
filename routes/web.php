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

// Penceramah
$router->post('/penceramah', 'PenceramahController@create');
$router->get('/penceramah', 'PenceramahController@index');
$router->get('/penceramah/{id}', 'PenceramahController@show');
