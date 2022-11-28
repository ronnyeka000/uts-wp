<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'home'] );

Route::get('/comedy', [BookController::class, 'comedy'] );

Route::get('/adventure', [BookController::class, 'adventure'] );

Route::get('/romance', [BookController::class, 'romance'] );

Route::get('/fantasy', [BookController::class, 'fantasy'] );

Route::get('/publisher', [BookController::class, 'publisher']);

Route::get('/contact', [BookController::class, 'contact']);
