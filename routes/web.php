<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Http\Controllers\JadwalMakeupController;
use App\Http\Controllers\PaketMakeupController;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    $dataPelanggan = Pelanggan::all();

    return view('admin.dashboard', compact('dataPelanggan'));
});

Route::resource('pelanggan', PelangganController::class);
Route::resource('jadwal', JadwalMakeupController::class);
Route::resource('paket', PaketMakeupController::class);
