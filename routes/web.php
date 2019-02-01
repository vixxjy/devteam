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

// Route::get('/admin', function(){
//     echo "Hello Admin";
// })->middleware('auth','admin');
 
// Route::get('/editor', function(){
//     echo "Hello Editor";
// })->middleware('auth','editor');
 
// Route::get('/staff', function(){
//     echo "Hello Staff";
// })->middleware('auth','staff');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
