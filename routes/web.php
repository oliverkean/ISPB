<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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
Route::resource('users-list', UserController::class);
Route::resource('profile', ProfileController::class);

