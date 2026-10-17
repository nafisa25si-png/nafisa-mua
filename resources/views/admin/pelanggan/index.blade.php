@extends('admin.layouts.app')

@section('title', 'Data Pelanggan')
@section('breadcrumb', 'Data Pelanggan')
@section('page-title', 'Data Pelanggan')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Daftar <span>Pelanggan</span></h1>
    <p class="page-header-sub">Kelola semua data pelanggan setia Maison Coquette.</p>
</div>

<div class="mc-card">
    <div class="mc-card-header">
        <div class="mc-card-title">
            <div class="mc-card-title-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
            Semua Pelanggan
        </div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                 stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Pelanggan
        </a>
    </div>

    <div class="mc-table-wrap">
        <table class="mc-table">
            <thead>
                <tr>
                    <th style="width:52px;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th style="text-align:center;width:110px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataPelanggan as $pelanggan)
                    <tr>
                        <td class="col-no">{{ $loop->iteration }}</td>
                        <td class="col-name">{{ $pelanggan->nama }}</td>
                        <td style="color:var(--text-mid);font-size:13.5px;">
                            {{ $pelanggan->email ?: '—' }}
                        </td>
                        <td>{{ $pelanggan->no_hp ?: '—' }}</td>
                        <td style="color:var(--text-muted);font-size:13px;max-width:200px;">
                            {{ Str::limit($pelanggan->alamat, 50, '…') ?: '—' }}
                        </td>
                        <td>
                            <div class="btn-actions">
                                <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                   class="btn-icon btn-edit" title="Edit Pelanggan">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M12 20h9"/>
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L9 17l-4 1 1-4Z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data pelanggan ini?')"
                                      style="margin:0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn-icon btn-delete"
                                            title="Hapus Pelanggan">
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
                        <td colspan="6" class="mc-table-empty">
                            <div class="mc-table-empty-icon">👤</div>
                            Belum ada data pelanggan.
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
