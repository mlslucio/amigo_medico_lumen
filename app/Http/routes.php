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

$app->get('/teste', function () use ($app) {
    return "ola";
});

$app->group(['prefix' => 'api/amigomedico', 'namespace' => 'App\Http\Controllers'], function ($app) {
	
	$app->post('/login/{dados}', ['as' => 'login', 'uses'=>'LoginController@autenticar']);
	$app->get('/{id}', ['as' => 'agendas', 'uses'=>'AmController@getAgenda']);
	$app->post('/', ['as' => 'aprovarConsulta', 'uses'=>'AmController@aprovarConsulta']);



});

	
	

