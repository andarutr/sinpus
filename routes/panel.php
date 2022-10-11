<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', [DashboardController::class, 'index']);
});