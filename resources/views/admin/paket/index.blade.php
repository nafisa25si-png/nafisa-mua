@extends('admin.layouts.app')

@section('title', 'Data Paket Makeup')
@section('breadcrumb', 'Paket Makeup')
@section('page-title', 'Paket Makeup')

@section('content')

{{-- Page Header --}}
<div class="page-header">
    <h1 class="page-header-title">Daftar <span>Paket Makeup</span></h1>
    <p class="page-header-sub">Kelola semua paket layanan Maison Coquette.</p>
</div>

{{-- Alerts --}}
@if(session('success'))
    <div class="alert alert-success">
        <span class="alert-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </span>
        <span>{{ session('success') }}</span>
    </div>
@endif

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

{{-- Card --}}
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
            Semua Paket
        </div>
        <a href="{{ route('paket.create') }}" class="btn btn-primary">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                 stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Paket
        </a>
    </div>

    <div class="mc-table-wrap">
        <table class="mc-table">
            <thead>
                <tr>
                    <th style="width:52px;">No</th>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th style="text-align:center;width:110px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataPaket as $paket)
                    <tr>
                        <td class="col-no">{{ $loop->iteration }}</td>
                        <td class="col-name">{{ $paket->nama_paket }}</td>
                        <td class="col-price">Rp {{ number_format($paket->harga, 0, ',', '.') }}</td>
                        <td style="color:var(--text-muted);font-size:13.5px;">
                            {{ $paket->deskripsi ?: '—' }}
                        </td>
                        <td>
                            <div class="btn-actions">
                                {{-- Edit --}}
                                <a href="{{ route('paket.edit', $paket->id) }}"
                                   class="btn-icon btn-edit"
                                   title="Edit Paket">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M12 20h9"/>
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L9 17l-4 1 1-4Z"/>
                                    </svg>
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('paket.destroy', $paket->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus paket ini?')"
                                      style="margin:0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn-icon btn-delete"
                                            title="Hapus Paket">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M3 6h18"/>
                                            <path d="M8 6V4h8v2"/>
                                            <path d="M19 6l-1 14H6L5 6"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="mc-table-empty">
                            <div class="mc-table-empty-icon">💄</div>
                            Belum ada data paket makeup.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="padding:16px 24px;border-top:1px solid var(--cream-dark);">
        <a href="{{ url('/admin') }}" class="btn-back">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"/>
            </svg>
            Kembali ke Dashboard
        </a>
    </div>
</div>

@endsection
