<?php

use App\Http\Controllers\CategoryController;
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