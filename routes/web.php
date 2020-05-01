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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entreprises', 'EntrepriseController@index')->name('entreprises.index');
Route::get('/entreprises/create', 'EntrepriseController@create')->name('entreprises.create');
Route::post('/entreprises/store', 'EntrepriseController@store')->name('entreprises.store');
Route::get('/entreprises/{id}/show', 'EntrepriseController@show')->name('entreprises.show');


Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/update', 'UserController@update')->name('users.update');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
