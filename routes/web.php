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

Route::get('/ruta/{param}', function ($param) {
    return "hello world!".$param;
});

Route::get('test', "testController@test");
Route::get('test2/{param}', "testController@test2");

Route::resource("crud", "crudController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');