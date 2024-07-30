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
// users route
Route::get('/users','Userscontroller@index')->name('users.index');
Route::get('users/create','Userscontroller@create')->name('users.create');
Route::post('users/store','Userscontroller@store')->name('users.store');
Route::get('users/delete/{id}','Userscontroller@delete')->name('users.delete');
Route::get('users/edit/{id}','Userscontroller@edit')->name('users.edit');
Route::post('users/update/{id}','Userscontroller@update')->name('users.update');

//campaigns route

Route::get('/campaign','CampaignController@index')->name('campaigns.index');
Route::get('/campaign/create','CampaignController@create')->name('campaign.create');
Route::post('/campaign/store','CampaignController@store')->name('campaign.store');
Route::get('/campaign/delete/{id}','CampaignController@delete')->name('campaign.delete');
Route::get('campaign/edit/{id}','Campaigncontroller@edit')->name('campaign.edit');
Route::post('/campaign/update/{id}','CampaignController@update')->name('campaign.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//donors route
Route::get('/donor','DonorController@index')->name('donor.index');
Route::get('/donor/create','DonorController@create')->name('donor.create');
Route::post('/donor/store','DonorController@store')->name('donor.store');
Route::get('/donor/delete/{id}','DonorController@delete')->name('donor.delete');
Route::get('/donor/edit/{id}','DonorController@edit')->name('donor.edit');
Route::post('/donor/update/{id}','DonorController@update')->name('donor.update');