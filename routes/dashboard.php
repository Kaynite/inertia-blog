<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::as('dashboard.')->group(function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('home');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
