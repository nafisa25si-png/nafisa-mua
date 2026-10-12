<?php

namespace App\Http\Controllers;

use App\Models\PaketMakeup;
use Illuminate\Http\Request;

class PaketMakeupController extends Controller
{
    public function index()
    {
        $dataPaket = PaketMakeup::all();

        return view('admin.paket.index', compact('dataPaket'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|max:100',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|max:1000',
        ]);

        PaketMakeup::create($validated);

        return redirect()->route('paket.index')
            ->with('success', 'Paket makeup berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        return redirect()->route('paket.index');
    }

    public function edit(string $id)
    {
        $paket = PaketMakeup::findOrFail($id);

        return view('admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|max:100',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|max:1000',
        ]);

        $paket = PaketMakeup::findOrFail($id);
        $paket->update($validated);

        return redirect()->route('paket.index')
            ->with('success', 'Paket makeup berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $paket = PaketMakeup::findOrFail($id);
        $paket->delete();

        return redirect()->route('paket.index')
            ->with('success', 'Paket makeup berhasil dihapus.');
    }
}
