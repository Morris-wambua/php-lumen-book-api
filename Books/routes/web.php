<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->group(['prefix' => 'api/v1/'], function () use ($router) {
  $router->get('books',  ['uses' => 'BooksController@showAllBooks']);

  $router->get('books/{id}', ['uses' => 'BooksController@showOneBook']);

  $router->post('books', ['uses' => 'BooksController@create']);

  $router->delete('books/{id}', ['uses' => 'BooksController@delete']);

  $router->put('books/{id}', ['uses' => 'BooksController@update']);
});