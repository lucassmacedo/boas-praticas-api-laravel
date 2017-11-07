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

//Route::resource('films', 'FilmsController', ['except' => ['create','edit']]);

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['middleware' => 'bindings'], function ($api) {

        $api->get('/version', function () {
            return ['version' => config('api.version')];
        });
        $api->resource('films', '\App\Http\Controllers\FilmsController', ['except' => ['create', 'edit']]);
    });
});