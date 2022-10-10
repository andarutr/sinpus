<?php use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
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
Route::get('/buku', [SinpusController::class, 'book']);
Route::get('/buku/atomic-habit', [BookController::class, 'detail']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/profile/edit', [UserController::class, 'edit_profile']);
Route::get('/user/change-password', [UserController::class, 'change_password']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forget-password', [AuthController::class, 'forget_password']);


