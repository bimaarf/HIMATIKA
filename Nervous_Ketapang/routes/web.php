<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// frontend
Route::get('/', [SiteController::class, 'index'])->name('fe-index.index');
Route::get('/tambah-produk', [ProductController::class, 'formTambah'])->name('fe-product.form_tambah_product')->middleware('auth');
Route::post('/produk-tambah', [ProductController::class, 'tambah'])->name('fe-product.tambah')->middleware('auth');
route::get('/{slug}', [ProductController::class, 'formUbah'])->name('fe-product.form_ubah_product')->middleware('auth');
Route::post('/produk-edit/{slug}', [ProductController::class, 'ubah'])->name('fe-product.ubah')->middleware('auth');
Route::get('/delete/product/{slug}', [ProductController::class, 'hapus'])->name('fe-product.hapus')->middleware('auth');