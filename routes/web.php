<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Lat1Controller::class, 'index']);

Route::get('/lat1', [Lat1Controller::class, 'index']);

Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);
