@extends('admin.layouts.app')

@section('title', 'Edit Jadwal Makeup')
@section('breadcrumb', 'Jadwal Makeup')
@section('page-title', 'Edit Jadwal')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Edit <span>Jadwal Makeup</span></h1>
    <p class="page-header-sub">Perbarui informasi sesi makeup pelanggan.</p>
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
                    <path d="M12 20h9"/>
                    <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L9 17l-4 1 1-4Z"/>
                </svg>
            </div>
            Edit Detail Jadwal
        </div>
    </div>

    <div class="mc-card-body">
        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST" class="form-section">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nama_pelanggan">
                    Nama Pelanggan <span class="req">*</span>
                </label>
                <input type="text"
                       id="nama_pelanggan"
                       name="nama_pelanggan"
                       value="{{ old('nama_pelanggan', $jadwal->nama_pelanggan) }}"
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
                           value="{{ old('tanggal', $jadwal->tanggal) }}"
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
                           value="{{ old('waktu', substr($jadwal->waktu, 0, 5)) }}"
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
                        {{ old('status', $jadwal->status) == 'Menunggu' ? 'selected' : '' }}>
                        Menunggu
                    </option>
                    <option value="Dikonfirmasi"
                        {{ old('status', $jadwal->status) == 'Dikonfirmasi' ? 'selected' : '' }}>
                        Dikonfirmasi
                    </option>
                    <option value="Selesai"
                        {{ old('status', $jadwal->status) == 'Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>
                    <option value="Dibatalkan"
                        {{ old('status', $jadwal->status) == 'Dibatalkan' ? 'selected' : '' }}>
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
                    Simpan Perubahan
                </button>
                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection
