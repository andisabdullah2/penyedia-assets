<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RegistMitraController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PemesananBarangController;
use App\Http\Controllers\ServicePenumpangController;
use App\Http\Controllers\ServiceBarangController;

use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\TransaksiBarangController;


use App\Http\Controllers\PemesananPenumpangController;
use App\Http\Controllers\OrdersPenumpangController;
use App\Http\Controllers\OrdersBarangController;
use App\Http\Controllers\StatusPenumpangController;
use App\Http\Controllers\StatusDriverController;
use App\Http\Controllers\StatusBarangDriverController;
use App\Http\Controllers\StatusBarangController;

//yang fix
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\Admin\AssetsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadsController;





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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/search', [SearchController::class,'index'])->name('search');
Route::get('/searchdropdown', [SearchController::class,'searchdropdown'])->name('searchdropdown');
Route::get('/uploads', [UploadsController::class,'index'])->name('uploads');

Route::prefix('admin')
//     ->namespace('Admin')
    ->middleware(['auth','admin'])  //menambahkan semacam satpam di web kita berhubungan dengan penambahan kernel IsAdmin
    ->group(function(){
        Route::get('/', [DashboardController::class,'index'])
            ->name('dashboard');
        
        Route::resource('kriteria', KriteriaController::class);
        Route::resource('owner', OwnerController::class);
        Route::resource('user-table', UserController::class);
        Route::resource('assets', AssetsController::class);
        Route::resource('transaksi', TransaksiController::class);
        Route::resource('update-transaksi', TransaksiController::class);
        Route::resource('update-transaksi-barang', TransaksiBarangController::class);




    });




Route::get('/layanan-mobil', [MobilController::class,'index'])->name('layanan-mobil');
// Route::get('/layanan-mobil/create', [MobilController::class,'index'])->name('layanan-mobil');
// Route::get('/layanan-mobil/search', [MobilController::class,'search'])->name('layanan-mobil-search');


Route::get('/detail/{id}', [DetailController::class,'index'])->name('detail-assets');
 Route::resource('submit-penumpang', ServicePenumpangController::class);
 Route::resource('submit-order-penumpang', OrdersPenumpangController::class);
 Route::resource('submit-order-barang', OrdersBarangController::class);
 Route::resource('submit-barang', ServiceBarangController::class);
// Route::post('/submit-penumpang', [OrderPenumpangController::class,'store'])->name('submit-penumpang');
// Route::post('/submit', [DetailController::class,'store'])->name('detail-mobil-create');

Route::get('/status', [StatusPenumpangController::class,'index'])->name('status-penumpang');
Route::get('/status-driver', [StatusDriverController::class,'index'])->name('status-driver');
    Route::resource('update-status-driver', StatusDriverController::class);
    Route::resource('update-status-penumpang', StatusPenumpangController::class);
    Route::resource('update-status-barang', StatusBarangController::class);
    Route::resource('update-status-barangdriver', StatusBarangDriverController::class);



Route::get('/pemesanan-barang', [PemesananBarangController::class,'index'])->name('pemesanan-barang');
Route::get('/pemesanan-penumpang', [PemesananPenumpangController::class,'index'])->name('pemesanan-penumpang');

Route::get('/home-mitra', [RegistMitraController::class, 'index'])
        ->name('home-mitra')->middleware(['auth','driver']);
Route::get('/create-mitra', [RegistMitraController::class, 'create'])
        ->name('create-mitra');
Route::post('/submit-regist-mitra', [RegistMitraController::class, 'store'])
        ->name('submit-regist-mitra');





       
   
    
Auth::routes(['verify' =>true]);
