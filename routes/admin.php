<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\PoinkuController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AProfileController;
use App\Http\Controllers\Admin\RingkasanController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AChangePasswordController;

Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/profil/edit', [AProfileController::class, 'edit']);
    Route::post('/admin/profil/edit', [AProfileController::class, 'update']);
    Route::get('/admin/change-password', [AChangePasswordController::class, 'index']);

    // Book
    Route::get('/admin/book', [BookController::class, 'index']);
    Route::get('/admin/book/create', [BookController::class, 'create'])->name('book-create');
    Route::post('/admin/book/create', [BookController::class, 'store']);
    Route::get('/admin/book/edit/{id}', [BookController::class, 'edit'])->name('book-edit');
    Route::post('/admin/book/edit/{id}', [BookController::class, 'update']);
    Route::get('/admin/book/delete/{id}', [BookController::class, 'destroy']);

    // Category
    Route::get('/admin/category', [CategoryController::class, 'index']);

    // Inventory
    Route::get('/admin/inventory', [InventoryController::class, 'index']);
    Route::get('/admin/inventory/edit/{id}', [InventoryController::class, 'update']);
    Route::get('/admin/history', [HistoryController::class, 'index']);
    Route::get('/admin/ringkasan', [RingkasanController::class, 'index']);
    Route::get('/admin/ringkasan/view/{id}', [RingkasanController::class, 'show']);
    Route::get('/admin/ringkasan/delete/{id}', [RingkasanController::class, 'destroy']);
    Route::get('/admin/poinku', [PoinkuController::class, 'index']);
    Route::post('/admin/pointku/create', [PoinkuController::class, 'store']);
    Route::get('/admin/pointku/delete/{id}', [PoinkuController::class, 'destroy']);
});