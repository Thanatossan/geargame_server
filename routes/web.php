<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/api')->group(function () {
    Route::get('/', function(){ 
        return "this is from laravel";
    });

    Route::get('/getUser','userController@show');
    Route::post('/auth','Auth\userLoginController@auth');

    Route::get('/getMatch','matchController@getMatch');
    Route::get('/incomingMatch','matchController@imcomingMatch');
});


  

