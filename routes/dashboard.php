<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PostController;

Route::as('dashboard.')->group(function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('home');
    Route::resource('posts', PostController::class);
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
