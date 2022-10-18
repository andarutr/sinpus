<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AProfileController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AChangePasswordController;

Route::middleware(['auth','isAdmin'])->group(function () {
    // Route
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/profil/edit', [AProfileController::class, 'edit']);
    Route::post('/admin/profil/edit', [AProfileController::class, 'update']);
    Route::get('/admin/change-password', [AChangePasswordController::class, 'index']);
    Route::post('/admin/change-password', [AChangePasswordController::class, 'update']);
    Route::get('/admin/book', [BookController::class, 'index']);
    Route::get('/admin/book/create', [BookController::class, 'create'])->name('book-create');
    Route::post('/admin/book/create', [BookController::class, 'store']);
    Route::get('/admin/book/edit/{id}', [BookController::class, 'edit'])->name('book-edit');
    Route::post('/admin/book/edit/{id}', [BookController::class, 'update']);
    Route::get('/admin/book/delete/{id}', [BookController::class, 'destroy']);
    Route::get('/admin/category', [CategoryController::class, 'index']);
    Route::get('/admin/category/create', [CategoryController::class, 'create']);
    Route::post('/admin/category/create', [CategoryController::class, 'store']);
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/admin/category/edit/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/admin/inventory', [InventoryController::class, 'index']);
    Route::get('/admin/inventory/edit/{id}', [InventoryController::class, 'update']);
    Route::get('/admin/history', [HistoryController::class, 'index']);
});