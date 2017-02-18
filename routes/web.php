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
Route::get('/signout', 'LoginController@logoff')->name('logoff');
Route::post('/signin', 'LoginController@login');
Route::get('/authorized', 'QuoteController@index')->name('home');
Route::get('/authorized/detail/{id}', 'QuoteController@detail')->name('detail');
Route::get('/authorized/edit/{id}', 'QuoteController@edit')->name('edit');
Route::get('/authorized/delete/{id}', 'QuoteController@delete')->name('delete');
Route::get('/authorized/create', 'QuoteController@create')->name('create');
Route::post('/authorized/create', 'QuoteController@insert')->name('create');
