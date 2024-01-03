<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:0'])->group(function () {
        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('pendaftar/biodata', [App\Http\Controllers\BiodataController::class, 'index'])->name('biodata.index');
        Route::get('pendaftar/biodata/create', [App\Http\Controllers\BiodataController::class, 'create'])->name('biodata.create');
        Route::post('pendaftar/biodata/simpan', [App\Http\Controllers\BiodataController::class, 'simpan'])->name('biodata.simpan');
    });

    Route::middleware(['role:1'])->group(function () {
        Route::get('pegawai/home', [App\Http\Controllers\Pegawai\HomeController::class, '__invoke'])->name('home');
        Route::get('pegawai/pendaftar', [App\Http\Controllers\pegawai\PendaftarController::class, 'index'])->name('pendaftar.index');
        Route::get('pegawai/verifikasi/{id}', [App\Http\Controllers\pegawai\PendaftarController::class,'verifikasi'])->name('pendaftar.verifikasi');
        Route::post('pegawai/updateverifikasi', [App\Http\Controllers\pegawai\PendaftarController::class, 'updateVerifikasi'])->name('pendaftar.updateVerifikasi');
    });
    // Route::middleware(['role:1'])->prefix('pegawai')->as('pegawai.')->namespace('App\Http\Controllers\pegawai')->group(function () {
    //     Route::get('/home', 'HomeController@__invoke')->name('home');
    //     Route::get('/pendaftar', 'PendaftarController@index')->name('pendaftar');
    // });
});
