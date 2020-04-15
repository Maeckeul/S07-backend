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

//demo page d'accueil
$router->get('/', ['uses' => 'MainController@home', 'as' => 'main-home']);

//categories GET all 
$router->get('/categories', ['uses' => 'CategoryController@list', 'as' => 'category-list']);

//categories GET one 
//{id} dénote une portion d'URL variable. On pourra le récupérer en argument de la méthode item($id)
$router->get('/categories/{id}', ['uses' => 'CategoryController@item', 'as' => 'category-item']);