<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::post('/login','API\UserController@login');
Route::post('user','API\UserController@store');

Route::middleware('auth:api')->group(function(){
    //Route::resource('user','API\UserController');
    Route::get('user','API\UserController@index');
    Route::get('user/{id}','API\UserController@show');
    Route::put('user/{id}','API\UserController@update');
    Route::patch('user/{id}','API\UserController@update');
    Route::delete('user/{id}','API\UserController@destroy');
});

