<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincon;
use App\Http\Controllers\Dashboardcon;
use App\Http\Controllers\Regiscon;
use App\Http\Controllers\Usercon;
use App\Http\Controllers\Produkcon;
use App\Http\Controllers\Pembeliancon;

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

Route::get('/', [ProdukCon::class, 'home'])->name('homeproduk');


Route::get('/login', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [RegisCon::class, 'register'])->name('register');
Route::post('register/action', [Regiscon::class, 'actionregister'])->name('actionregister');

Route::get('/user/tampil', [Usercon::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [UserCon::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [UserCon::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [UserCon::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [UserCon::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [UserCon::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::get('/produk/tampil', [ProdukCon::class, 'index'])->name('indexproduk')->middleware('auth');
Route::get('/produk/input', [ProdukCon::class, 'input'])->name('inputproduk')->middleware('auth');
Route::post('/produk/storeinput', [ProdukCon::class, 'storeinput'])->name('storeInputproduk')->middleware('auth');
Route::get('/produk/update/{id}', [ProdukCon::class, 'update'])->name('updateproduk')->middleware('auth');
Route::post('/produk/storeupdate', [ProdukCon::class, 'storeupdate'])->name('storeUpdateproduk')->middleware('auth');
Route::get('/produk/delete/{id}', [ProdukCon::class, 'delete'])->name('deleteproduk')->middleware('auth');
Route::get('/produk/upload', [ProdukCon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/produk/uploadproses', [produkCon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

Route::get('/pembelian/tampil', [PembelianCon::class, 'index'])->name('indexpembelian')->middleware('auth');
Route::get('/pembelian/input', [PembelianCon::class, 'input'])->name('inputpembelian')->middleware('auth');
Route::post('/pembelian/storeinput', [PembelianCon::class, 'storeinput'])->name('storeInputpembelian')->middleware('auth');
Route::get('/pembelian/update/{id}', [PembelianCon::class, 'update'])->name('updatepembelian')->middleware('auth');
Route::post('/pembelian/storeupdate', [PembelianCon::class, 'storeupdate'])->name('storeUpdatepembelian')->middleware('auth');
Route::get('/pembelian/delete/{id}', [PembelianCon::class, 'delete'])->name('deletepembelian')->middleware('auth');