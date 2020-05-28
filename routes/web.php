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
Route::get('/entreprises/delete/{id}','EntrepriseController@destroy')->name('entreprises.destroy');
Route::get('/entreprises/edit/{entreprise}','EntrepriseController@edit')->name('entreprises.edit');
Route::put('/entreprises/edit/{entreprise}','EntrepriseController@update')->name('entreprises.update');

Route::get('entreprises/{slug}/contacts', 'ContactController@index')->name('contacts.entreprise');


Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::get('/users/show', 'UserController@show')->name('users.show');

Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contacts/{id}/show', 'ContactController@show')->name('contacts.show');
Route::get('/contacts/create', 'ContactController@create')->name('contacts.create');
Route::post('/contacts/store', 'ContactController@store')->name('contacts.store');
Route::get('/contacts/delete/{id}','ContactController@destroy')->name('contacts.destroy');
Route::get('/contacts/edit/{contact}','ContactController@edit')->name('contacts.edit');
Route::put('/contacts/edit/{contact}','ContactController@update')->name('contacts.update');

