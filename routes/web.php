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
Route::get('/users','Userscontroller@index')->name('users.index');
Route::get('users/create','Userscontroller@create')->name('users.create');
Route::post('users/store','Userscontroller@store')->name('users.store');


Route::get('users/delete/{id}','Userscontroller@delete')->name('users.delete');
Route::get('users/edit/{id}','Userscontroller@edit')->name('users.edit');
Route::post('users/update/{id}','Userscontroller@update')->name('users.update');




