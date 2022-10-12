<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\ProfileController;


Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', [DashboardController::class, 'index']);
});

Route::middleware(['auth','isUser'])->group(function () {
    Route::get('/user', function() {
        return redirect('/user/profile');
    });
    Route::get('/user/profil', [ProfileController::class, 'show']);
});
