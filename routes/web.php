<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeKamarController;
use App\Models\TipeKamar;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('loginForm');
Route::post('/loginAction', [LoginController::class, 'loginAction'])->name('loginAction');

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm');
Route::post('/registerAction', [RegisterController::class, 'registerAction'])->name('registerAction');

Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [AdminController::class, 'user'])->name('admin.user');
    });

    Route::prefix('kamar')->group(function () {
        Route::prefix('tipe_kamar')->group(function () {
            Route::get('/', [TipeKamarController::class, 'index'])->name('tipe_kamar.index');
            Route::post('/insert', [TipeKamarController::class, 'insert'])->name('tipe_kamar.insert');
            Route::get('/download-template', [TipeKamarController::class, 'template'])->name('tipe_kamar.template');
            Route::delete('/delete/{id}', [TipeKamarController::class, 'delete'])->name('tipe_kamar.delete');
        });
        Route::prefix('nomor_kamar')->group(function () {
            Route::get('/', [AdminController::class, 'nomorKamar'])->name('nomor_kamar.index');
        });
    });
});