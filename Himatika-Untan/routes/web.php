<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminStrukturController;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Struktur;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// berita
Route::get('/dashboard', [SiteController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/berita', [AdminController::class,'indexBerita'])->name('admin.berita.dashboard')->middleware('auth');
Route::get('/dashboard/berita/form-tambah', [AdminBeritaController::class, 'formTambah'])->name('admin.berita.formTambah')->middleware('auth');
Route::post('/dashboard/berita/tambah', [AdminBeritaController::class, 'tambah'])->name('admin.berita.tambah')->middleware('auth');
Route::get('/dashboard/berita/formubah/{key}', [AdminBeritaController::class, 'formUbah'])->name('admin.berita.formUbah')->middleware('auth');
Route::post('/dashboard/berita/ubah/{key}', [AdminBeritaController::class, 'ubah'])->name('admin.berita.ubah')->middleware('auth');
Route::get('/dashboard/berita/view/{key}', [AdminBeritaController::class, 'detail'])->name('admin.berita.detail')->middleware('auth');
Route::get('/dashboard/berita/hapus/{id}', [AdminBeritaController::class, 'hapus'])->name('admin.berita.hapus')->middleware('auth');

// kategori
Route::get('/dashboard/kategori', [AdminController::class, 'indexKategori'])->name('admin.kategori.dashboard')->middleware('auth');
Route::get('/dashboard/kategori/formtambah', [AdminKategoriController::class, 'formTambah'])->name('admin.kategori.formTambah')->middleware('auth');
Route::post('/dashboard/kategori/tambah', [AdminKategoriController::class, 'tambah'])->name('admin.kategori.tambah')->middleware('auth');
Route::get('/dashboard/kategori/formubah/{id}', [AdminKategoriController::class, 'formUbah'])->name('admin.kategori.formUbah')->middleware('auth');
Route::post('/dashboard/kategori/ubah/{id}', [AdminKategoriController::class, 'ubah'])->name('admin.kategori.ubah')->middleware('auth');
Route::get('/dashboard/kategori/view/{id}', [AdminKategoriController::class, 'detail'])->name('admin.kategori.detail')->middleware('auth');
Route::get('/dashboard/kategori/hapus/{id}', [AdminKategoriController::class, 'hapus'])->name('admin.kategori.hapus')->middleware('auth');

// frontend
Route::get('/', [BeritaController::class, 'index'])->name('fe-berita.index');

// Struktur
Route::get('/dashboard/struktur', [AdminStrukturController::class, 'index'])->name('admin.struktur.dashboard')->middleware('auth');
Route::post('/dashboard/struktur/ubah{id}', [AdminStrukturController::class, 'ubah'])->name('admin.struktur.ubah')->middleware('auth');
