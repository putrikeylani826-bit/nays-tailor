
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananProdukController;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

/*
|--------------------------------------------------------------------------
| Produk dan Pemesanan Produk untuk Pelanggan
|--------------------------------------------------------------------------
*/

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk.index');

Route::get('/produk/{produk}', [ProdukController::class, 'show'])
    ->name('produk.show');

Route::post('/pesanan-produk', [PesananProdukController::class, 'store'])
    ->name('pesanan-produk.store');

Route::get('/pesanan-produk/{pesananProduk}/sukses', [
    PesananProdukController::class,
    'sukses'
])->name('pesanan-produk.sukses');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Pelanggan
    Route::resource('pelanggan', PelangganController::class);

    // Layanan
    Route::resource('layanan', LayananController::class);

    // Pesanan custom
    Route::resource('pesanan', PesananController::class);

    // Ukuran
    Route::resource('ukuran', UkuranController::class);

    // Pembayaran
    Route::resource('pembayaran', PembayaranController::class);

    // Laporan
    Route::get('/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');

    Route::get('/laporan/pdf', [LaporanController::class, 'pdf'])
        ->name('laporan.pdf');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
