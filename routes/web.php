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
    $totalPelanggan  = \App\Models\Pelanggan::count();
    $totalJadwal     = \App\Models\JadwalMakeup::count();
    $jadwalHariIni   = \App\Models\JadwalMakeup::whereDate('tanggal', today())->count();
    $totalPaket      = \App\Models\PaketMakeup::count();
    $jadwalTerbaru   = \App\Models\JadwalMakeup::orderByDesc('tanggal')
                            ->orderByDesc('waktu')
                            ->limit(5)
                            ->get();
    $dataPaket       = \App\Models\PaketMakeup::limit(5)->get();

    return view('admin.dashboard', compact(
        'totalPelanggan', 'totalJadwal', 'jadwalHariIni',
        'totalPaket', 'jadwalTerbaru', 'dataPaket'
    ));
});

Route::resource('pelanggan', PelangganController::class);
Route::resource('jadwal', JadwalMakeupController::class);
Route::resource('paket', PaketMakeupController::class);
