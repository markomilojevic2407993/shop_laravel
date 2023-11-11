<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome'); });
// HomeController
Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', function () { return view('about'); });
// ShopController
Route::get('/shop', [ShopController::class, 'index']);

Route::get('/layout', function () {return view('layout'); }); // umesto function, unosi se controller

// contactController
Route::get('/contact', [contactController::class, 'index']);
Route::get('/admin/all-contacts', [contactController::class, 'getAllContacts']);
