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


$app->post('/api/amigomedico/{dados}', ['as' => 'login', 'uses'=>'Login@aprovarConsulta']);
$app->get('/api/amigomedico/{id}', ['as' => 'agendas', 'uses'=>'AmController@getAgenda']);
$app->post('/api/amigomedico', ['as' => 'aprovarConsulta', 'uses'=>'AmController@aprovarConsulta']);

	
	

