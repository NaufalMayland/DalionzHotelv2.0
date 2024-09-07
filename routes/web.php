<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('loginForm');

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm');
Route::post('/registerAction', [RegisterController::class, 'registerAction'])->name('registerAction');