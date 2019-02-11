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
Route::get('/history', [ 'uses' => 'PagesController@history', 'as' => 'history']);
Route::get('/downloads', [ 'uses' => 'PagesController@downloads', 'as' => 'downloads']);

Route::get('/dashboard', [ 'uses' => 'dashboardController@dashboard', 'as' => 'dashboard']);

Route::get('/signin', [ 'uses' => 'AuthController@login', 'as' => 'login']);
Route::post('/signin', [ 'uses' => 'AuthController@signin', 'as' => 'signin']);
Route::get('/logout',[ 'uses' => 'AuthController@logout', 'as' => 'logout']);
Route::get('/user/add',[ 'uses' => 'AuthController@addUser', 'as' => 'add.user']);
Route::post('/user/store',[ 'uses' => 'AuthController@store', 'as' => 'user.store']);
Route::get('/user/update/{id}',[ 'uses' => 'AuthController@edit', 'as' => 'edit.user']);
Route::post('/user/update/{id}',[ 'uses' => 'AuthController@UpdateUser', 'as' => 'user.update']);
Route::get( '/user/delete/{id}', ['uses' => 'AuthController@delete', 'as' => 'delete.user']);

// slider routes
Route::get('/slider',[ 'uses' => 'SliderController@index', 'as' => 'slider']);
Route::post('/slider/store',[ 'uses' => 'SliderController@store', 'as' => 'slider.store']);
Route::get( '/slider/delete/{id}', ['uses' => 'SliderController@delete', 'as' => 'slider.delete']);
Route::get('/slider/edit/{id}', ['uses' => 'SliderController@edit', 'as' => 'slider.edit']);
Route::post( '/slider/update/{id}', ['uses' => 'SliderController@update', 'as' => 'slider.update']);


Route::get('/event', 'EventsController@index')->name('events');
Route::post('/event', 'EventsController@store')->name('event-post');
Route::get( '/event/delete/{id}', 'EventsController@delete')->name('event-delete');
Route::get( '/event/edit/{id}', 'EventsController@edit')->name('event-edit');
Route::post( '/event/update/{id}', 'EventsController@update')->name('event-update');

Route::get( 'event/read/{id}', 'PagesController@news')->name('more-event');

// Route::get( 'event/read/{id}', 'PagesController@moreEvent')->name('more-event');

Route::post('/send/message', 'MessageController@store')->name('store-message');
Route::get('/message', 'MessageController@index')->name('message');
Route::get( '/message/delete/{id}', 'MessageController@delete')->name('message-delete');

Route::post('/apply/admission', 'AdmissionController@store')->name('store-admission');
Route::get('/admissions', 'AdmissionController@index')->name('admission');
Route::get('/admission-view/{id}', 'AdmissionController@admission')->name('admission.view');
Route::get('/admission/delete/{id}', 'AdmissionController@delete')->name('admission.delete');


// Thought of the week routes
Route::get('/Thoughtofweek',[ 'uses' => 'ThoughtweekController@index', 'as' => 'Thoughtweek']);
Route::post('/Thoughtofweek/store',[ 'uses' => 'ThoughtweekController@store', 'as' => 'Thoughtweek.store']);
Route::get( '/Thoughtofweek/edit/{id}', ['uses' => 'ThoughtweekController@edit', 'as' => 'thoughtweek.edit']);
Route::post( '/Thoughtofweek/update/{id}', ['uses' => 'ThoughtweekController@update', 'as' => 'thoughtweek.update']);
Route::get( '/Thoughtofweek/delete/{id}', ['uses' => 'ThoughtweekController@delete', 'as' => 'thoughtweek.delete']);

// Thought of the term routes
Route::get('/Thoughtofterm',[ 'uses' => 'ThoughttermController@index', 'as' => 'Thoughtterm']);
Route::post('/Thoughtofterm/store',[ 'uses' => 'ThoughttermController@store', 'as' => 'Thoughtterm.store']);
Route::get( '/Thoughtofterm/edit/{id}', ['uses' => 'ThoughttermController@edit', 'as' => 'thoughtterm.edit']);
Route::post( '/Thoughtofterm/update/{id}', ['uses' => 'ThoughttermController@update', 'as' => 'thoughtterm.update']);
Route::get( '/Thoughtofterm/delete/{id}', ['uses' => 'ThoughttermController@delete', 'as' => 'thoughtterm.delete']);

// online Results
Route::get('/results',[ 'uses' => 'ResultController@index', 'as' => 'Results']);
Route::get('/result',[ 'uses' => 'ResultController@create', 'as' => 'Result.add']);
Route::post('/result/store',[ 'uses' => 'ResultController@store', 'as' => 'Result.store']);
Route::get('/result/edit/{id}',[ 'uses' => 'ResultController@edit', 'as' => 'Result.edit']);
Route::post('/result/update/{id}',[ 'uses' => 'ResultController@update', 'as' => 'Result.update']);
Route::get('/result/delete/{id}',[ 'uses' => 'ResultController@delete', 'as' => 'Result.delete']);

// pdf routes
Route::get('/pdf/list',[ 'uses' => 'PdfController@index', 'as' => 'pdf']);
Route::post('/pdf/add',[ 'uses' => 'PdfController@upload', 'as' => 'pdf.add']);

Route::get('/video/add', ['uses' => 'YoutubeController@index', 'as' => 'video.add']);
Route::post('/video/add', ['uses' => 'YoutubeController@store', 'as' => 'video.store']);
Route::get('/video/edit/{id}', ['uses' => 'YoutubeController@edit', 'as' => 'edit.video']);
Route::post('/video/update/{id}', ['uses' => 'YoutubeController@update', 'as' => 'update.video']);
Route::get('/video/delete/{id}', ['uses' => 'YoutubeController@delete', 'as' => 'delete.video']);

Route::get('pdf/{uuid}/download', 'PdfController@download')->name('pdf.download');
Route::get( '/pdf/delete/{id}', ['uses' => 'PdfController@delete', 'as' => 'pdf.delete']);

