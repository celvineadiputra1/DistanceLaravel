<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('distance', 'App\Http\Controllers\distanceController@index');
    $api->post('distance', 'App\Http\Controllers\distanceController@store');
    $api->put('distance/{id}', 'App\Http\Controllers\distanceController@update');
    $api->delete('distance/{id}', 'App\Http\Controllers\distanceController@destroy');
});