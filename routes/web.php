<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;

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
// Route::get('/', function() {
//     return view('home');
// });
Route::get('/', [WelcomeController::class, 'index']);  


Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); // menyimpan data user baru

    // modifikasi halaman ajax
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // menampilkan halaman form tambah user ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']); // menyimpan data user baru ajax

    Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user

    // edit dan update dengan ajax
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // menampilkan halaman form edit user
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);  // menyimpan perubahan data user

    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

// untuk tabel m_level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']); // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']); // menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']); // menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']); // menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data level
});

// untuk tabel m_kegtegori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); // menampilkan halaman awal level
    Route::post('/list', [KategoriController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']); // menampilkan halaman form tambah level
    Route::post('/', [KategoriController::class, 'store']); // menyimpan data level baru
    Route::get('/{id}', [KategoriController::class, 'show']); // menampilkan detail level
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [KategoriController::class, 'update']); // menyimpan perubahan data level
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // menghapus data level
});

// untuk tabel m_supplier
Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']); // menampilkan halaman awal level
    Route::post('/list', [SupplierController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [SupplierController::class, 'create']); // menampilkan halaman form tambah level
    Route::post('/', [SupplierController::class, 'store']); // menyimpan data level baru
    Route::get('/{id}', [SupplierController::class, 'show']); // menampilkan detail level
    Route::get('/{id}/edit', [SupplierController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [SupplierController::class, 'update']); // menyimpan perubahan data level
    Route::delete('/{id}', [SupplierController::class, 'destroy']); // menghapus data level
});

// untuk tabel m_barang
Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']); // menampilkan halaman awal level
    Route::post('/list', [BarangController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']); // menampilkan halaman form tambah level
    Route::post('/', [BarangController::class, 'store']); // menyimpan data level baru
    Route::get('/{id}', [BarangController::class, 'show']); // menampilkan detail level
    Route::get('/{id}/edit', [BarangController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [BarangController::class, 'update']); // menyimpan perubahan data level
    Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data level
});



// // route untuk halaman category
// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [CategoryController::class, 'food']);
//     Route::get('/beauty-health', [CategoryController::class, 'beauty']);
//     Route::get('/home-care', [CategoryController::class, 'home']);
//     Route::get('/baby-kid', [CategoryController::class, 'baby']);
// });

// // halaman user
// Route::get('/user/{name?}/id/{id?}', function ($name = 'John', $id = 1) {
//     return 'Nama saya ' . $name . ' dengan id ' . $id;
// });

// // halaman transaksi
// Route::get('/transaksi', [TransactionController::class, 'transaksi']);


// praktikum implementasi db facade
// memodifikasi route untuk /level
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);

// route untuk mengisi data
// Route::get('/user/tambah', [UserController::class, 'tambah']);

// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
