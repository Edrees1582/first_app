<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');

Route::post('/signup', [HomeController::class, 'signupStore'])->name('signup.store');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
