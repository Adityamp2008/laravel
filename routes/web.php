<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\keuntunganController;
use App\Http\Controllers\masukController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RobotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
route::get('/contoh', [robotController::class,'index'])->name('robot');
route::get('/penjualan',[penjualanController::class,'index'])->name('penjualan');
route::get('/pembelian',[pembelianController::class,'index'])->name('pembelian');
route::get('/masuk',[masukController::class,'index'])->name('masuk');
route::get('/keluar',[masukController::class,'index'])->name('keluar');
route::get('/keuntungan',[keuntunganController::class,'index'])->name('keuntungan');


//routes barang
Route::get('/admin/barang/tampil',[App\http\Controllers\barangController::class,'tampil'])->name('admin.barang.tampil');
//edit
Route::get('/admin/barang/edit/{id}', [App\Http\Controllers\barangController::class, 'edit'])->name('admin.barang.edit');
//hapus  
Route::get('/admin/barang/tampil/delete/{id}', [App\Http\Controllers\barangController::class, 'delete']);
//tmabah
Route::get('/admin/barang/tambah',[App\Http\Controllers\barangController::class,'tambah'])->name('admin.barang.tambah');
//tampil
Route::post('/admin/barang/tampil',[App\Http\Controllers\barangController::class,'post'])->name('admin.barang.post'); 
//update
Route::patch('/admin/barang/update/{id}', [BarangController::class, 'update'])->name('admin.barang.update');

//routes cabang

Route::get('/admin/cabang/tampil',[App\Http\Controllers\cabangController::class,'tampil'])->name('admin.cabang.tampil');

Route::get('/admin/cabang/edit/{id}',[App\Http\Controllers\cabangController::class,'edit'])->name('admin.cabang.edit');

Route::get('/admin/cabang/tambah',[App\Http\Controllers\cabangController::class,'tambah'])->name('admin.cabang.tambah');

Route::post('admin/cabang/post',[App\Http\Controllers\cabangController::class,'post'])->name('admin.cabang.post'); 

Route::patch('/admin/cabang/update/{id}', [App\Http\Controllers\cabangController::class, 'update'])->name('admin.cabang.update');

Route::get('/admin/cabang/tampil/delete/{id}', [App\Http\Controllers\cabangController::class, 'delete']);


//routes keuangan
Route::get('/admin/keuangan/tampil',[App\Http\Controllers\keuanganController::class,'tampil'])->name('admin.keuangan.tampil');

Route::get('keuangan/edit/{id}', [App\Http\Controllers\KeuanganController::class, 'edit'])->name('keuangan.edit');


Route::get('/admin/keuangan/tambah',[App\Http\Controllers\keuanganController::class,'tambah'])->name('admin.keuangan.tambah');

Route::post('admin/keuangan/post',[App\Http\Controllers\keuanganController::class,'post'])->name('admin.keuangan.post'); 

Route::patch('/admin/keuangan/update/{id}', [App\Http\Controllers\keuanganController::class, 'update'])->name('admin.keuangan.update');

//routes pekerja

Route::get('/admin/pekerja/tampil',[App\Http\Controllers\pekerjaController::class,'tampil'])->name('admin.pekerja.tampil');

Route::get('/admin/pekerja/edit/{id}',[App\Http\Controllers\pekerjaController::class,'edit'])->name('admin.pekerja.edit');

Route::get('/admin/pekerja/tambah',[App\Http\Controllers\pekerjaController::class,'tambah'])->name('admin.pekerja.tambah');

Route::post('admin/pekerja/post',[App\Http\Controllers\pekerjaController::class,'post'])->name('admin.pekerja.post'); 

Route::patch('/admin/pekerja/tampil/{id}', [App\Http\Controllers\pekerjaController::class, 'update'])->name('admin.pekerja.tampil');

Route::get('/admin/pekerja/tampil/delete/{id}', [App\Http\Controllers\pekerjaController::class, 'delete']);

Route::get('admin/home',[App\Http\Controllers\AdminController::class,'admin']);

require __DIR__.'/auth.php';
 
 
