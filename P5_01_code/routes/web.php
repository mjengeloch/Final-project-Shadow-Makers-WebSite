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

use App\Informations;

//Client Routes
Route::get('/', 'WelcomeController@index');
Route::get('/streamer/{twitch}', 'WelcomeController@show');
Route::get('/shadowmakers/{user}', 'ShadowMakersController@show')->name('shadowmakers.user.show');
Route::get('/shadowmakers', 'ShadowMakersController@index')->name('shadowmakers.index');
Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');

//Auth Routes
Auth::routes(['register' => false]);

//Administration Routes
Route::post('/administration/informations', 'InformationsController@update')->middleware('auth')->name('updateInformations');
Route::get('/administration/informations', 'InformationsController@edit')->middleware('auth')->name('informations');

Route::delete('/administration/listeComptes/force/{user}', 'AccountController@forceDestroy')->middleware('auth', 'admin')->name('account.force.destroy');
Route::post('/administration/listeComptes/restore/{user}', 'AccountController@restore')->middleware('auth', 'admin')->name('account.restore');
Route::delete('/administration/listeComptes/{user}', 'AccountController@destroy')->middleware('auth', 'admin')->name('account.destroy');
Route::post('/administration/listeComptes/{user}', 'AccountController@updateRoles')->middleware('auth', 'admin')->name('account.updateRoles');
Route::get('/administration/listeComptes/{user}', 'AccountController@show')->middleware('auth', 'admin')->name('account.show');
Route::get('/administration/listeComptes', 'AccountController@index')->middleware('auth', 'admin')->name('listAccount');

Route::post('/administration/creerCompte', 'AccountController@store')->middleware('auth', 'admin')->name('account.store');
Route::get('/administration/creerCompte', 'AccountController@create')->middleware('auth', 'admin')->name('account.create');

Route::post('/administration/compte', 'AccountController@update')->middleware('auth')->name('updateAccount');
Route::get('/administration/compte', 'AccountController@edit')->middleware('auth')->name('account');

Route::get('/administration', 'AdministrationController@index')->middleware('auth')->name('administration');

