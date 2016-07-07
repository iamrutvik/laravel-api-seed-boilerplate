<?php
	
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
	$api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
	$api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
	$api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

	// example of protected route
	/*$api->get('protected', ['middleware' => ['api.auth'], function () {
		return \App\User::all();
    }]);

	// example of free route
	$api->get('free', function() {
		return \App\User::all();
	});*/


	/*
	 * You can utilize 'jwt.refresh' middleware when you want to use new token for each request.
	 * So when you send one request you will get another newly generated token in authentication header with response.
	 * All previous token will be get invalidated.
	 *
	 * */
	/*$api->group(['middleware' => ['api.auth', 'jwt.refresh'], function ($api) {
		// Endpoints registered here will have the "foo" middleware applied.
	}]);*/

});
