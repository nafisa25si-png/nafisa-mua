@extends('admin.layouts.app')

@section('title', 'Data Jadwal Makeup')
@section('breadcrumb', 'Jadwal Makeup')
@section('page-title', 'Jadwal Makeup')

@section('content')

<div class="page-header">
    <h1 class="page-header-title">Daftar <span>Jadwal Makeup</span></h1>
    <p class="page-header-sub">Kelola semua sesi makeup pelanggan Maison Coquette.</p>
</div>

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
            Semua Jadwal
        </div>
        <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                 stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Jadwal
        </a>
    </div>

    <div class="mc-table-wrap">
        <table class="mc-table">
            <thead>
                <tr>
                    <th style="width:52px;">No</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th style="text-align:center;width:110px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataJadwal as $jadwal)
                    <tr>
                        <td class="col-no">{{ $loop->iteration }}</td>
                        <td class="col-name">{{ $jadwal->nama_pelanggan }}</td>
                        <td>{{ \Carbon\Carbon::parse($jadwal->tanggal)->format('d M Y') }}</td>
                        <td>{{ substr($jadwal->waktu, 0, 5) }}</td>
                        <td>
                            @php
                                $statusClass = match($jadwal->status) {
                                    'Menunggu'    => 'badge-menunggu',
                                    'Dikonfirmasi'=> 'badge-dikonfirmasi',
                                    'Selesai'     => 'badge-selesai',
                                    'Dibatalkan'  => 'badge-dibatalkan',
                                    default       => 'badge-menunggu',
                                };
                            @endphp
                            <span class="badge {{ $statusClass }}">
                                <span class="badge-dot"></span>
                                {{ $jadwal->status }}
                            </span>
                        </td>
                        <td>
                            <div class="btn-actions">
                                <a href="{{ route('jadwal.edit', $jadwal->id) }}"
                                   class="btn-icon btn-edit" title="Edit Jadwal">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M12 20h9"/>
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L9 17l-4 1 1-4Z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')"
                                      style="margin:0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn-icon btn-delete"
                                            title="Hapus Jadwal">
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
                            <div class="mc-table-empty-icon">🗓️</div>
                            Belum ada data jadwal makeup.
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
