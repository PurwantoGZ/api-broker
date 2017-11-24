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

$app->get('google/{ticker}', [
    'as' => 'profile', 'uses' => 'BrokerController@getQuetesv2'
]);

$api=app('Dingo\Api\Routing\Router');

$api->version('v1',function($api){
	$api->group(['prefix'=>'oauth'],function($api){
		$api->post('token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
		
		$api->get('scopes','\Laravel\Passport\Http\Controllers\ScopeController@all');

	});

	$api->group(['namespace'=>'App\Http\Controllers','middleware'=>['auth:api','cors']],function($api){
		//controller router

		$api->get('users','UserController@show');
		$api->get('user/{id}','UserController@showById');
		$api->post('user','UserController@insert');
	});

	$api->group(['namespace'=>'App\Http\Controllers'],function($api){
		$api->get('errors','ErrorController@error');
	});
});
