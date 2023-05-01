<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('authenticate', AuthenticateController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('add-users', AddUserController::class);
Route::resource('products-list', ProductController::class);