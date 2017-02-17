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

Route::get('signup', 'SignUpController@index');
Route::post('signup', 'SignUpController@create');
Route::get('/signin', 'LoginController@index');
Route::post('/signin', 'LoginController@login');
