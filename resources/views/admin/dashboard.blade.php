@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Page Header --}}
<div class="page-header">
    <h1 class="page-header-title">
        Selamat Datang, <span>Admin!</span>
    </h1>
    <p class="page-header-sub">Kelola bisnis Maison Coquette dengan mudah dari satu panel.</p>
</div>

{{-- Stats Cards --}}
<div class="stats-grid">

    {{-- Total Pelanggan --}}
    <div class="stat-card">
        <div class="stat-icon rose-grad">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
        </div>
        <div class="stat-info">
            <div class="stat-label">Total Pelanggan</div>
            <div class="stat-value">{{ $totalPelanggan ?? 0 }}</div>
            <div class="stat-change neutral">Pelanggan terdaftar</div>
        </div>
    </div>

    {{-- Total Jadwal --}}
    <div class="stat-card">
        <div class="stat-icon blush-grad">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
        </div>
        <div class="stat-info">
            <div class="stat-label">Total Jadwal</div>
            <div class="stat-value">{{ $totalJadwal ?? 0 }}</div>
            <div class="stat-change neutral">Semua sesi makeup</div>
        </div>
    </div>

    {{-- Jadwal Hari Ini --}}
    <div class="stat-card">
        <div class="stat-icon cream-grad">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
            </svg>
        </div>
        <div class="stat-info">
            <div class="stat-label">Jadwal Hari Ini</div>
            <div class="stat-value">{{ $jadwalHariIni ?? 0 }}</div>
            <div class="stat-change up">{{ date('d M Y') }}</div>
        </div>
    </div>

    {{-- Total Paket --}}
    <div class="stat-card">
        <div class="stat-icon gold-grad">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                <line x1="7" y1="7" x2="7.01" y2="7"/>
            </svg>
        </div>
        <div class="stat-info">
            <div class="stat-label">Total Paket</div>
            <div class="stat-value">{{ $totalPaket ?? 0 }}</div>
            <div class="stat-change neutral">Paket tersedia</div>
        </div>
    </div>

</div>

{{-- Dashboard Grid --}}
<div class="dashboard-grid">

    {{-- Recent Jadwal --}}
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
                Jadwal Terbaru
            </div>
            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary" style="padding:7px 16px;font-size:12px;">
                Lihat Semua
            </a>
        </div>
        <div class="mc-table-wrap">
            <table class="mc-table">
                <thead>
                    <tr>
                        <th>Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwalTerbaru ?? [] as $jadwal)
                        <tr>
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
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="mc-table-empty">
                                <div class="mc-table-empty-icon">🗓️</div>
                                Belum ada jadwal tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Paket Tersedia --}}
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
                Paket Makeup
            </div>
            <a href="{{ route('paket.create') }}" class="btn btn-primary" style="padding:7px 16px;font-size:12px;">
                + Tambah
            </a>
        </div>
        <div class="mc-table-wrap">
            <table class="mc-table">
                <thead>
                    <tr>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataPaket ?? [] as $paket)
                        <tr>
                            <td class="col-name">{{ $paket->nama_paket }}</td>
                            <td class="col-price">Rp {{ number_format($paket->harga, 0, ',', '.') }}</td>
                            <td style="color:var(--text-muted);font-size:13px;">
                                {{ Str::limit($paket->deskripsi, 40, '…') ?: '—' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="mc-table-empty">
                                <div class="mc-table-empty-icon">💄</div>
                                Belum ada paket tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Quick Access --}}
<div class="mc-card">
    <div class="mc-card-header">
        <div class="mc-card-title">
            <div class="mc-card-title-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                </svg>
            </div>
            Akses Cepat
        </div>
    </div>
    <div class="mc-card-body" style="display:flex;gap:12px;flex-wrap:wrap;">
        <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Jadwal
        </a>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            Tambah Pelanggan
        </a>
        <a href="{{ route('paket.create') }}" class="btn btn-gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                <line x1="7" y1="7" x2="7.01" y2="7"/>
            </svg>
            Tambah Paket
        </a>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
            </svg>
            Lihat Semua Jadwal
        </a>
    </div>
</div>

@endsection
