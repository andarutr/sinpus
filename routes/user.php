<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PoinkuController;
use App\Http\Controllers\User\HistoryController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\MeringkasController;
use App\Http\Controllers\User\PinjamBukuController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\User\PengembalianBukuController;

Route::middleware(['auth','isUser'])->group(function () {
    Route::get('/user/notification', [NotificationController::class, 'index']);
    Route::get('/user', function() {
        return redirect('/user/profile');
    });
    Route::get('/user/profil', [ProfileController::class, 'show']);
    Route::get('/user/profil/edit', [ProfileController::class, 'edit']);
    Route::post('/user/profil/edit', [ProfileController::class, 'update']);
    Route::get('/user/change-password', [ChangePasswordController::class, 'index']);
    Route::post('/user/change-password', [ChangePasswordController::class, 'update']);
    Route::get('/user/pinjam/{url}', [PinjamBukuController::class, 'store']);
    Route::get('/user/history', [HistoryController::class, 'index']);
    Route::get('/user/pengembalian-buku/{url}', [PengembalianBukuController::class, 'store']);
    Route::get('/user/meringkas', [MeringkasController::class, 'index']);
    Route::get('/user/meringkas-buku/{url}', [MeringkasController::class, 'create']);
    Route::post('/user/meringkas-buku/{url}', [MeringkasController::class, 'store']);
    Route::get('/user/meringkas-buku/edit/{url}', [MeringkasController::class, 'edit']);
    Route::post('/user/meringkas-buku/edit/{url}', [MeringkasController::class, 'update']);
    Route::get('/user/poinku', [PoinkuController::class, 'index']);
});
