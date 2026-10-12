<?php

namespace App\Http\Controllers;

use App\Models\JadwalMakeup;
use Illuminate\Http\Request;

class JadwalMakeupController extends Controller
{
    public function index()
    {
        $dataJadwal = JadwalMakeup::all();

        return view('admin.jadwal.index', compact('dataJadwal'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required|max:100',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'status' => 'required|in:Menunggu,Dikonfirmasi,Selesai,Dibatalkan',
        ]);

        JadwalMakeup::create($validated);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal makeup berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        return redirect()->route('jadwal.index');
    }

    public function edit(string $id)
    {
        $jadwal = JadwalMakeup::findOrFail($id);

        return view('admin.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required|max:100',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'status' => 'required|in:Menunggu,Dikonfirmasi,Selesai,Dibatalkan',
        ]);

        $jadwal = JadwalMakeup::findOrFail($id);
        $jadwal->update($validated);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal makeup berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $jadwal = JadwalMakeup::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal makeup berhasil dihapus.');
    }
}

