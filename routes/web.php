<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

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

    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/index', function () {
    return view('index');
});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function()
{


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class , 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class , 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class,'show'])->name('login');
        Route::post('/login', [LoginController::class,'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class ,'perform'])->name('logout.perform');
    });
});
