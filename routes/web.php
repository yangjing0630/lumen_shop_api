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

$router->group(['namespace' => 'Admin'], function () use ($router) {

    $router->get('test', 'TextController@index');

//    $app->get('testOptions', 'TextController@test_options');

    $router->options('testOptions', 'TextController@test_options');

    $router->get('goods/index', 'GoodsController@index');

    $router->get('goods/create', 'GoodsController@create');

    $router->get('redis/create', 'RedisController@create');
});
