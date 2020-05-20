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
Route::get('/entreprises/{id}/modification', 'EntrepriseController@modification')->name('entreprises.modification');
Route::get('/entreprises/delete/{id}','EntrepriseController@destroy')->name('entreprises.destroy');


Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::get('/users/show', 'UserController@show')->name('users.show');
