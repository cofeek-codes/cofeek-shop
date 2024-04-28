<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\User;
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
    return redirect()->route('products.all');
})->name('home');

// auth

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
    // login
    Route::get('/login', 'loginform')->name('loginform');
    Route::post('/login', 'login')->name('login');
    // register
    Route::get('/register', 'registerform')->name('registerform');
    Route::post('/register', 'register')->name('register');

    // logout
    Route::get('/logout', 'logout')->name('logout');
});

// products (catalog)

Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {
    Route::get('/all', 'all')->name('all');
    // admin panel actions
    // delete and update products
    Route::get('/delete/{id}', 'delete')->middleware('admin');
    Route::get('/update/{id}', 'update')->middleware('admin');
});

// admin


Route::controller(AdminController::class)->prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('panel', 'showPanel')->name('panel');
});



// cart
Route::controller(CartController::class)->middleware('auth')->prefix('cart')->name('cart.')->group(function () {
    Route::get('/to/{id}', 'add')->name('add');
});

// category

Route::controller(CategoryController::class)->middleware('auth')->prefix('category')->name('category.')->group(function () {
    Route::post('add', 'add')->name('add')->middleware('admin');
    Route::get('delete/{id}', 'delete')->name('delete')->middleware('admin');
});
