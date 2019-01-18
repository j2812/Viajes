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

Route::get('/', 'OfferController@showAll')->name('inicio');



Auth::routes();

Route::get('/home', 'ClientController@index')->name('home');
Route::get('/profile', 'ClientController@show')->name('client.profile');
Route::resource('offer', 'OfferController');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::get('/users', 'AdminController@userIndex')->name('admin.users.index');
Route::get('/users/{user}', 'AdminController@userShow')->name('admin.users.show');
Route::get('/users/{user}/edit', 'AdminController@userEdit')->name('admin.users.edit');
Route::put('/users/{user}', 'AdminController@userUpdate')->name('admin.users.update');

