<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\Admin\AChangePasswordController;


Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/profil/edit', [AProfileController::class, 'edit']);
    Route::post('/admin/profil/edit', [AProfileController::class, 'update']);
    Route::get('/admin/change-password', [AChangePasswordController::class, 'index']);
    Route::post('/admin/change-password', [AChangePasswordController::class, 'update']);
    Route::get('/admin/book', [BookController::class, 'index']);
});

Route::middleware(['auth','isUser'])->group(function () {
    Route::get('/user', function() {
        return redirect('/user/profile');
    });
    Route::get('/user/profil', [ProfileController::class, 'show']);
    Route::get('/user/profil/edit', [ProfileController::class, 'edit']);
    Route::post('/user/profil/edit', [ProfileController::class, 'update']);
    Route::get('/user/change-password', [ChangePasswordController::class, 'index']);
    Route::post('/user/change-password', [ChangePasswordController::class, 'update']);
});
