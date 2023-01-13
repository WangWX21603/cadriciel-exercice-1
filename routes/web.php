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

use App\Http\Controllers\GugongController;

Route::get('/', [GugongController::class, 'index']);
Route::get('/home', [GugongController::class, 'index']);
Route::get('/about', [GugongController::class, 'about']);
Route::get('/products', [GugongController::class, 'products']);
Route::get('/contact', [GugongController::class, 'contact']);
Route::post('/contact', [GugongController::class, 'contactForm']);
