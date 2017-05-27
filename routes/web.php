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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/app/', function () use ($app) {
    return view('app', ['app_name' => 'app de teste']);
});

$app->get('/api/', function () use ($app) {
    return 'retorno do teste de api';
});


/**
 * Routes for resource group
 */
$app->get('group', 'GroupsController@all');
$app->get('group/{id}', 'GroupsController@get');
$app->post('group', 'GroupsController@add');
$app->put('group/{id}', 'GroupsController@put');
$app->delete('group/{id}', 'GroupsController@remove');
