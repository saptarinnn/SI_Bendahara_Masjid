<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [Controllers\AuthController::class, 'login']);
Route::post('login', [Controllers\AuthController::class, 'loginpost'])->name('login');

Route::middleware(['auth'])->group(function () {
    /* Dashboard */
    Route::get('dashboard', [Controllers\DashboardController::class, 'index'])->name('dashboard');

    /* Infaq Masjid */
    Route::resource('masjid', Controllers\InfaqMasjidController::class)->except('create', 'store');
    /* Infaq Sosial */
    Route::resource('sosial', Controllers\InfaqSosialController::class)->except('create', 'store');
    /* Rekening Masjid */
    Route::resource('rekmasjid', Controllers\RekeningMasjidController::class)->except('show');
    /* Petugas Zakat */
    Route::resource('petugaszakat', Controllers\PetugasZakatController::class)->except('show', 'edit');
    /* Zakat */
    Route::resource('zakat', Controllers\ZakatController::class);

    /* Pengguna */
    Route::resource('pengguna', Controllers\PenggunaController::class)->except('show', 'edit');

    /* Logout */
    Route::post('logout', [Controllers\AuthController::class, 'logout'])->name('logout');
});
