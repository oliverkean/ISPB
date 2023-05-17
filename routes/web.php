<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddOrderController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\OrderToSupplierController;
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
Route::get('/practice', function () {
    return view('practice');
});

Route::resource('authenticate', AuthenticateController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('add-users', AddUserController::class);
Route::resource('products-list', ProductController::class);
Route::resource('users-list', UserController::class);
Route::resource('profile', ProfileController::class);
Route::resource('orders', OrderController::class);
Route::resource('add-orders', AddOrderController::class);
Route::resource('add-products', AddProductController::class);
Route::resource('add-categories', AddCategoryController::class);
Route::resource('add-to-supplier', OrderToSupplierController::class);

