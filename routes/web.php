<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('dashboard.welcome');
    })->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/sign_in', [LoginController::class, 'signIn'])->name('sign_in');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/sign_up', [RegisterController::class, 'signUp'])->name('sign_up');
});
