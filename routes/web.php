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

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    
    Route::post('', [UserController::class, 'store'])->name('users.store');
    
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
    
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
