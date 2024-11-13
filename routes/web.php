<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IRSController;
use App\Http\Controllers\KHSController;
use App\Http\Controllers\BuatIrsController;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard-mahasiswa', function () {
    return view('mahasiswa.dashboard-mahasiswa');
});

Route::get('/buat_irs', [BuatIrsController::class, 'index'])->name('buat_irs');

Route::get('/irs', [IRSController::class, 'index'])->name('irs');

Route::get('/khs', [KHSController::class, 'index'])->name('khs');
