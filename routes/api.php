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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/purchase', 'OrderController@store');

Route::get('/order_details/{id}', 'OrderController@getDetails');
Route::get('/get_cost/{id}', 'ProductController@getCost');

Route::post('/request', 'OrderController@order_request');

