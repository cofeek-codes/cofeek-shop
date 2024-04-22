<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
})->name('home');

// auth

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
    // login
    Route::get('/login', 'loginform')->name('loginform');
    Route::post('/login', 'login')->name('login');
    // register
    Route::get('/register', 'registerform')->name('registerform');
    Route::post('/register', 'register')->name('register');
});
