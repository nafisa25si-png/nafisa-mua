@extends('admin.layouts.app')

@section('title', 'Tambah Paket Makeup')
@section('breadcrumb', 'Paket Makeup')
@section('page-title', 'Tambah Paket')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Tambah <span>Paket Baru</span></h1>
    <p class="page-header-sub">Isi informasi paket makeup Maison Coquette.</p>
</div>

@if($errors->any())
    <div class="alert alert-error">
        <span class="alert-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <line x1="12" y1="8" x2="12" y2="12"/>
                <line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
        </span>
        <div>
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="mc-card">
    <div class="mc-card-header">
        <div class="mc-card-title">
            <div class="mc-card-title-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                </svg>
            </div>
            Informasi Paket
        </div>
    </div>

    <div class="mc-card-body">
        <form action="{{ route('paket.store') }}" method="POST" class="form-section">
            @csrf

            <div class="form-group">
                <label class="form-label" for="nama_paket">
                    Nama Paket <span class="req">*</span>
                </label>
                <input type="text"
                       id="nama_paket"
                       name="nama_paket"
                       value="{{ old('nama_paket') }}"
                       class="form-control"
                       placeholder="Contoh: Makeup Wisuda Elegan"
                       required>
            </div>

            <div class="form-group">
                <label class="form-label" for="harga">
                    Harga Paket (Rp) <span class="req">*</span>
                </label>
                <input type="number"
                       id="harga"
                       name="harga"
                       value="{{ old('harga') }}"
                       min="0"
                       step="1000"
                       class="form-control"
                       placeholder="Contoh: 350000"
                       required>
            </div>

            <div class="form-group">
                <label class="form-label" for="deskripsi">Deskripsi Paket</label>
                <textarea id="deskripsi"
                          name="deskripsi"
                          class="form-control"
                          rows="4"
                          placeholder="Jelaskan layanan yang didapat dalam paket ini…">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                        <polyline points="17 21 17 13 7 13 7 21"/>
                        <polyline points="7 3 7 8 15 8"/>
                    </svg>
                    Simpan Paket
                </button>
                <a href="{{ route('paket.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection
