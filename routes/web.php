<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\StartController::class, 'index']);
Route::get('/json', [\App\Http\Controllers\StartController::class, 'getCities']);
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('events', \App\Http\Controllers\EventController::class);

Route::get('services', [\App\Http\Controllers\StaticController::class, 'services']);
Route::get('quality-assurance', [\App\Http\Controllers\StaticController::class, 'quality_assurance']);
Route::get('contact', [\App\Http\Controllers\StaticController::class, 'contact']);
Route::get('working-together', [\App\Http\Controllers\StaticController::class, 'working_together']);
Route::post('contact', [\App\Http\Controllers\StaticController::class, 'send_email']);
Route::get('careers', [\App\Http\Controllers\StaticController::class, 'careers']);
Route::post('careers', [\App\Http\Controllers\StaticController::class, 'apply']);

Route::get('/locale/{locale}', [\App\Http\Controllers\StartController::class, 'switchLang']);
