<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GamesController;

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

    Route::get('/', [HomeController::class, 'index'])->name('home');

/* games */
    Route::get('/jumping', [GamesController::class, 'jumping'])->name('jumping');
/* --- */
 
/* -- Auth -- */
    Route::post('/register', [RegisterController::class, 'register'])->name('register');  
    Route::get('/register', [RegisterController::class, 'show'])->name('register');

    Route::post('/login', [LoginController::class, 'login'])->name('login');  
    Route::get('/login', [LoginController::class, 'show'])->name('login');  
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');  
    // Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');  
/* --- */
