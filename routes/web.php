<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginpost'])->name('login');

Route::middleware(['auth'])->group(function () {
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

   Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
