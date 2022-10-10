<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinpusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SinpusController::class, 'index']);
Route::get('/kategori', [SinpusController::class, 'category']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/panel.php';
