<?php

use App\Http\Controllers\ItemController;
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
    Route::get('/', [ItemController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
    Route::get("/item/detail/{id}", [ItemController::class, "show"])->name("item.detail");
    Route::get("/summary", [ItemController::class, "summary"])->name("summary");
    Route::post("/item/update", [ItemController::class, "update"])->name("item.update");
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/sign_in', [LoginController::class, 'signIn'])->name('sign_in');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/sign_up', [RegisterController::class, 'signUp'])->name('sign_up');
});
