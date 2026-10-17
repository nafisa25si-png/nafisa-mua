@extends('admin.layouts.app')

@section('title', 'Tambah Pelanggan')
@section('breadcrumb', 'Data Pelanggan')
@section('page-title', 'Tambah Pelanggan')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Tambah <span>Pelanggan Baru</span></h1>
    <p class="page-header-sub">Daftarkan pelanggan baru Maison Coquette.</p>
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
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            Data Pelanggan
        </div>
    </div>

    <div class="mc-card-body">
        <form action="{{ route('pelanggan.store') }}" method="POST" class="form-section">
            @csrf

            <div class="form-group">
                <label class="form-label" for="nama">
                    Nama Lengkap <span class="req">*</span>
                </label>
                <input type="text"
                       id="nama"
                       name="nama"
                       value="{{ old('nama') }}"
                       class="form-control"
                       placeholder="Masukkan nama lengkap pelanggan"
                       required>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control"
                           placeholder="contoh@email.com">
                </div>

                <div class="form-group">
                    <label class="form-label" for="no_hp">No. HP</label>
                    <input type="text"
                           id="no_hp"
                           name="no_hp"
                           value="{{ old('no_hp') }}"
                           class="form-control"
                           placeholder="08xx-xxxx-xxxx">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="alamat">Alamat</label>
                <textarea id="alamat"
                          name="alamat"
                          class="form-control"
                          rows="3"
                          placeholder="Masukkan alamat lengkap pelanggan">{{ old('alamat') }}</textarea>
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
                    Simpan Data
                </button>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection
