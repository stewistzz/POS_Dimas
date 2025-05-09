<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// register
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
// login
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
// user login
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// logout
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

// melakukan CRUD pada level
Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

Route::get('categories', [KategoriController::class, 'index']);
Route::post('categories', [KategoriController::class, 'store']);
Route::get('categories/{kategori}', [KategoriController::class, 'show']);
Route::put('categories/{kategori}', [KategoriController::class, 'update']);
Route::delete('categories/{kategori}', [KategoriController::class, 'destroy']);

Route::get('products', [BarangController::class, 'index']);
Route::post('products', [BarangController::class, 'store']);
Route::get('products/{barang}', [BarangController::class, 'show']);
Route::put('products/{barang}', [BarangController::class, 'update']);
Route::delete('products/{barang}', [BarangController::class, 'destroy']);