<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Order;

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
Route::get('/order/{slug}', [OrderController::class, 'formTambah'])->name('fe-order.form_tambah_order')->middleware('auth');
Route::post('/order-tambah{id}', [OrderController::class, 'tambah'])->name('fe-order.tambah')->middleware('auth');
Route::get('/delete/order/{id}', [OrderController::class, 'hapus'])->name('fe-order.hapus')->middleware('auth');


// form product
Route::get('/tambah-produk', [ProductController::class, 'formTambah'])->name('fe-product.form_tambah_product')->middleware(['auth', 'role:admin|owner']);
Route::post('/produk-tambah', [ProductController::class, 'tambah'])->name('fe-product.tambah')->middleware(['auth', 'role:admin|owner']);
Route::get('/{slug}', [ProductController::class, 'formUbah'])->name('fe-product.form_ubah_product')->middleware(['auth', 'role:admin|owner']);
Route::post('/produk-edit/{slug}', [ProductController::class, 'ubah'])->name('fe-product.ubah')->middleware(['auth', 'role:admin|owner']);
Route::get('/delete/product/{id}', [ProductController::class, 'hapus'])->name('fe-product.hapus')->middleware(['auth', 'role:admin|owner']);

// form order
