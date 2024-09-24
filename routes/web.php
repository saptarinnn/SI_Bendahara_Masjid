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
    Route::resource('sosial', Controllers\InfaqMasjidController::class)->except('create', 'store');

    /* Logout */
    Route::post('logout', [Controllers\AuthController::class, 'logout'])->name('logout');
});
