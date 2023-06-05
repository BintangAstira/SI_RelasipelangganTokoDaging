<?php

use App\Http\Controllers\DagingController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenukaranPoinController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\KritikSaranController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::post('/pelanggan/{pelanggan}/update', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{pelanggan}/destroy', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
Route::get('/pelangganpdf', [PelangganController::class, 'exportPDF']);



Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::post('/supplier/{supplier}/update', [SupplierController::class, 'update'])->name('supplier.update');
Route::get('/supplier/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('supplier.destroy');
Route::get('/supplierpdf', [SupplierController::class, 'exportPDF']);


Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor.index');
Route::get('/distributor/create', [DistributorController::class, 'create'])->name('distributor.create');
Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
Route::get('/distributor/{distributor}/edit', [DistributorController::class, 'edit'])->name('distributor.edit');
Route::post('/distributor/{distributor}/update', [DistributorController::class, 'update'])->name('distributor.update');
Route::delete('/distributor/{distributor}/destroy', [DistributorController::class, 'destroy'])->name('distributor.destroy');
Route::get('/distributorpdf', [DistributorController::class, 'exportPDF']);


Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen.index');
Route::get('/konsumen/create', [KonsumenController::class, 'create'])->name('konsumen.create');
Route::post('/konsumen', [KonsumenController::class, 'store'])->name('konsumen.store');
Route::get('/konsumen/{konsumen}/edit', [KonsumenController::class, 'edit'])->name('konsumen.edit');
Route::post('/konsumen/{konsumen}/update', [KonsumenController::class, 'update'])->name('konsumen.update');
Route::delete('/konsumen/{konsumen}/destroy', [KonsumenController::class, 'destroy'])->name('konsumen.destroy');
Route::get('/konsumenpdf', [KonsumenController::class, 'exportPDF']);



Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/{pegawai}/update', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}/destroy', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');


Route::get('/poin', [PoinController::class, 'index'])->name('poin.index');
Route::get('/poin/create', [PoinController::class, 'create'])->name('poin.create');
Route::post('/poin', [PoinController::class, 'store'])->name('poin.store');
Route::get('/poin/{poin}/edit', [PoinController::class, 'edit'])->name('poin.edit');
Route::post('/poin/{poin}/update', [PoinController::class, 'update'])->name('poin.update');
Route::delete('/poin/{poin}/destroy', [PoinController::class, 'destroy'])->name('poin.destroy');

Route::get('/penukaranpoin', [PenukaranPoinController::class, 'index'])->name('penukaranpoin.index');
Route::get('/penukaranpoin/create', [PenukaranPoinController::class, 'create'])->name('penukaranpoin.create');
Route::post('/penukaranpoin', [PenukaranPoinController::class, 'store'])->name('penukaranpoin.store');
Route::get('/penukaranpoin/{penukaranpoin}/edit', [PenukaranPoinController::class, 'edit'])->name('penukaranpoin.edit');
Route::post('/penukaranpoin/{penukaranpoin}/update', [PenukaranPoinController::class, 'update'])->name('penukaranpoin.update');
Route::delete('/penukaranpoin/{penukaranpoin}/destroy', [PenukaranPoinController::class, 'destroy'])->name('penukaranpoin.destroy');

Route::get('/daging', [DagingController::class, 'index'])->name('daging.index');
Route::get('/daging/create', [DagingController::class, 'create'])->name('daging.create');
Route::post('/daging', [DagingController::class, 'store'])->name('daging.store');
Route::get('/daging/{daging}/edit', [DagingController::class, 'edit'])->name('daging.edit');
Route::post('/daging/{daging}/update', [DagingController::class, 'update'])->name('daging.update');
Route::delete('/daging/{daging}/destroy', [DagingController::class, 'destroy'])->name('daging.destroy');
Route::get('/pdf', [DagingController::class, 'exportPDF']);


Route::get('/kritiksaran', [KritikSaranController::class, 'index'])->name('kritiksaran.index');
Route::get('/kritiksaran/create', [KritikSaranController::class, 'create'])->name('kritiksaran.create');
Route::post('/kritiksaran', [KritikSaranController::class, 'store'])->name('kritiksaran.store');
Route::get('/kritiksaran/{kritiksaran}/edit', [KritikSaranController::class, 'edit'])->name('kritiksaran.edit');
Route::post('/kritiksaran/{kritiksaran}/update', [KritikSaranController::class, 'update'])->name('kritiksaran.update');
Route::delete('/kritiksaran/{kritiksaran}/destroy', [KritikSaranController::class, 'destroy'])->name('kritiksaran.destroy');


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::post('/transaksi/{transaksi}/update', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{transaksi}/destroy', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');


Route::get('/riwayattransaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayattransaksi.index');
Route::get('/riwayattransaksicreate', [RiwayatTransaksiController::class, 'create'])->name('riwayattransaksi.create');
Route::post('/riwayattransaksi', [RiwayatTransaksiController::class, 'store'])->name('riwayattransaksi.store');
Route::get('/riwayattransaksi/{id}/edit', [RiwayatTransaksiController::class, 'edit'])->name('riwayattransaksi.edit');
Route::post('/riwayattransaksi/update/{id}', [RiwayatTransaksiController::class, 'update'])->name('riwayattransaksi.update');
Route::delete('/riwayattransaksi/{riwayattransaksi}/destroy', [RiwayatTransaksiController::class, 'destroy'])->name('riwayattransaksi.destroy');
Route::get('/riwayattransaksipdf', [RiwayatTransaksiController::class, 'exportPDF']);