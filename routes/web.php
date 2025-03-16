<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// halaman utama/home
Route::get('/', function() {
    return view('home');
});


// route untuk halaman category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [CategoryController::class, 'food']);
    Route::get('/beauty-health', [CategoryController::class, 'beauty']);
    Route::get('/home-care', [CategoryController::class, 'home']);
    Route::get('/baby-kid', [CategoryController::class, 'baby']);
});

// halaman user
Route::get('/user/{name?}/id/{id?}', function ($name = 'John', $id = 1) {
    return 'Nama saya ' . $name . ' dengan id ' . $id;
});

// halaman transaksi
Route::get('/transaksi', [TransactionController::class, 'transaksi']);


// praktikum implementasi db facade
// memodifikasi route untuk /level
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

// route untuk mengisi data
Route::get('/user/tambah', [UserController::class, 'tambah']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
