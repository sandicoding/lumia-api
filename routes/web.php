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

//generate Aplication
$router->get('/key', 'ExampleController@generateKey');
$router->post('/foo', 'ExampleController@fooExample');

// $router->get('/foo', function () {

// 	return 'hello, get method';
// });

// $router->post('/bar', function () {

// 	return 'hello, post method';
// });

// // jenis router 
// 	$router->get('/get', function() {
// 		return 'GET';
// 	});

// 	$router->get('/post', function() {
// 		return 'post';
// 	});

// 	$router->get('/put', function() {
// 		return 'put';
// 	});

// 	$router->get('/patch', function() {
// 		return 'patch';
// 	});

// 	$router->get('/delete', function() {
// 		return 'delete';
// 	});

// 	$router->get('/options', function() {
// 		return 'options';
// 	});

// 	// menambahkan parameter di route
// 	$router->get('/user', 'UserController@index');

// 	//membuat router bsa di isi param dan tidak 
// 	$router->get('/optional[/{param}]', function($param = null) {
// 			return 'optional :  '. $param;
// 	});


// 	$router->group('prefix' => 'admin', 'middleware' =>  'auth', function () use ($router) {

// 		$router->get('home', function () {
// 			return 'admin Home';
// 		});
// 	});


$router->get('/admin/home', ['middleware' => 'age', function () {
	return 'old Enough';
}]);

$router->get('/fail', function () {
	return 'umur mu tak cukup';
});