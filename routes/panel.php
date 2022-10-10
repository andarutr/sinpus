<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', function() {
        return "ADMIN SESS";
    });
});