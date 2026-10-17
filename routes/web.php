<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Http\Controllers\JadwalMakeupController;
use App\Http\Controllers\PaketMakeupController;

Route::get('/', function () {
    $dataPaket = \App\Models\PaketMakeup::all();

    return view('home', compact('dataPaket'));
});

Route::post('/booking', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'nama'     => 'required|string|max:100',
        'no_hp'    => 'required|string|max:20',
        'email'    => 'nullable|email|max:100',
        'alamat'   => 'nullable|string',
        'tanggal'  => 'required|date',
        'waktu'    => 'required',
        'paket_id' => 'nullable|exists:paket_makeups,id',
        'catatan'  => 'nullable|string',
    ]);

    // Save or find Pelanggan
    \App\Models\Pelanggan::firstOrCreate(
        ['no_hp' => $validated['no_hp']],
        [
            'nama'   => $validated['nama'],
            'email'  => $validated['email'] ?? ($validated['no_hp'] . '@pelanggan.local'),
            'alamat' => $validated['alamat'] ?? '—',
        ]
    );

    // Get package name if selected
    $namaPaket = '';
    if (!empty($validated['paket_id'])) {
        $p = \App\Models\PaketMakeup::find($validated['paket_id']);
        if ($p) {
            $namaPaket = ' (' . $p->nama_paket . ')';
        }
    }

    // Save to JadwalMakeup
    \App\Models\JadwalMakeup::create([
        'nama_pelanggan' => $validated['nama'] . $namaPaket,
        'tanggal'        => $validated['tanggal'],
        'waktu'          => $validated['waktu'],
        'status'         => 'Menunggu',
    ]);

    return redirect()->to(url('/#booking'))->with('booking_success', 'Terima kasih, reservasi Anda berhasil dikirim! Tim Maison Coquette akan segera menghubungi Anda untuk konfirmasi jadwal.');
})->name('booking.store');

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
