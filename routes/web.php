<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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

Route::get('/', function () {
    return view('tampilan.data');
});

Route::get('/dashboard', function () {
    return view('contant.dashboard');
});

Route::get('/produk', function () {
    return view('tampilan.produk');
});

Route::get('/produk', [produkController::class, 'index']) ->name('produk');

Route::get('/produk/delete/{id}',[produkController::class,'destroy']) ->name ('produk');

Route::get('/produk/tambah', [produkController::class,'create']) ->name ('produk');

