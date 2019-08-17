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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StartController@index');
Route::get('/json', 'StartController@getCities');
Route::resource('products', 'ProductController');
Route::resource('events', 'EventController');

Route::get('services', 'StaticController@services');
Route::get('quality-assurance', 'StaticController@quality_assurance');
Route::get('contact', 'StaticController@contact');
Route::get('working-together', 'StaticController@working_together');
Route::post('contact', 'StaticController@send_email');
Route::get('careers', 'StaticController@careers');
Route::post('careers', 'StaticController@apply');

Route::get('/locale/{locale}', 'StartController@switchLang');
