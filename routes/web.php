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

Route::get('/', [ 'uses' => 'HomeController@index', 'as' => 'landing']);
Route::get('/aboutus', [ 'uses' => 'PagesController@aboutUs', 'as' => 'about']);
Route::get('/academics', [ 'uses' => 'PagesController@academics', 'as' => 'academics']);
Route::get('/admission', [ 'uses' => 'PagesController@admission', 'as' => 'admission']);
Route::get('/contact', [ 'uses' => 'PagesController@contact', 'as' => 'contact']);
Route::get('/gallery', [ 'uses' => 'PagesController@gallery', 'as' => 'gallery']);
Route::get('/news', [ 'uses' => 'PagesController@news', 'as' => 'news']);


Route::get('/dashboard', [ 'uses' => 'dashboardController@dashboard', 'as' => 'dashboard']);

Route::get('/signin', [ 'uses' => 'AuthController@login', 'as' => 'login']);
Route::post('/signin', [ 'uses' => 'AuthController@signin', 'as' => 'signin']);
Route::get('/logout',[ 'uses' => 'AuthController@logout', 'as' => 'logout']);

// slider routes
Route::get('/slider',[ 'uses' => 'SliderController@index', 'as' => 'slider']);
Route::post('/slider/store',[ 'uses' => 'SliderController@store', 'as' => 'slider.store']);
Route::get( '/slider/delete/{id}', ['uses' => 'SliderController@delete', 'as' => 'slider.delete']);