@extends('admin.layouts.app')

@section('title', 'Tambah Jadwal Makeup')
@section('breadcrumb', 'Jadwal Makeup')
@section('page-title', 'Tambah Jadwal')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Tambah <span>Jadwal Baru</span></h1>
    <p class="page-header-sub">Masukkan informasi jadwal sesi makeup pelanggan.</p>
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
                    <rect x="3" y="4" width="18" height="18" rx="2"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                </svg>
            </div>
            Detail Jadwal
        </div>
    </div>

    <div class="mc-card-body">
        <form action="{{ route('jadwal.store') }}" method="POST" class="form-section">
            @csrf

            <div class="form-group">
                <label class="form-label" for="nama_pelanggan">
                    Nama Pelanggan <span class="req">*</span>
                </label>
                <input type="text"
                       id="nama_pelanggan"
                       name="nama_pelanggan"
                       value="{{ old('nama_pelanggan') }}"
                       class="form-control"
                       placeholder="Masukkan nama pelanggan"
                       required>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="form-group">
                    <label class="form-label" for="tanggal">
                        Tanggal Makeup <span class="req">*</span>
                    </label>
                    <input type="date"
                           id="tanggal"
                           name="tanggal"
                           value="{{ old('tanggal') }}"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="waktu">
                        Waktu Makeup <span class="req">*</span>
                    </label>
                    <input type="time"
                           id="waktu"
                           name="waktu"
                           value="{{ old('waktu') }}"
                           class="form-control"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="status">
                    Status Jadwal <span class="req">*</span>
                </label>
                <select id="status" name="status" class="form-control" required>
                    <option value="Menunggu"
                        {{ old('status', 'Menunggu') == 'Menunggu' ? 'selected' : '' }}>
                        Menunggu
                    </option>
                    <option value="Dikonfirmasi"
                        {{ old('status') == 'Dikonfirmasi' ? 'selected' : '' }}>
                        Dikonfirmasi
                    </option>
                    <option value="Selesai"
                        {{ old('status') == 'Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>
                    <option value="Dibatalkan"
                        {{ old('status') == 'Dibatalkan' ? 'selected' : '' }}>
                        Dibatalkan
                    </option>
                </select>
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
                    Simpan Jadwal
                </button>
                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection
