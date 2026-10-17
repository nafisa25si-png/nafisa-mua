<aside class="sidebar" id="sidebar">

    {{-- Brand --}}
    <a class="sidebar-brand" href="{{ url('/admin') }}">
        <div class="sidebar-brand-logo-placeholder">
            <img
                src="{{ asset('assets-admin/images/logo maison coquette.jpeg') }}"
                alt="Logo Maison Coquette"
                class="sidebar-brand-logo"
            >
        </div>
        <div class="sidebar-brand-text">
            <span class="sidebar-brand-name">Maison Coquette</span>
            <span class="sidebar-brand-tagline">MUA Studio Admin</span>
        </div>
    </a>

    {{-- Navigation --}}
    <nav class="sidebar-nav">
        <div class="sidebar-section-label">Menu Utama</div>

        {{-- Dashboard --}}
        <a href="{{ url('/admin') }}"
           class="sidebar-nav-item {{ request()->is('admin') ? 'active' : '' }}">
            <span class="nav-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                </svg>
            </span>
            <span class="nav-label">Dashboard</span>
        </a>

        {{-- Pelanggan --}}
        <a href="{{ route('pelanggan.index') }}"
           class="sidebar-nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
            <span class="nav-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </span>
            <span class="nav-label">Data Pelanggan</span>
        </a>

        {{-- Jadwal --}}
        <a href="{{ route('jadwal.index') }}"
           class="sidebar-nav-item {{ request()->routeIs('jadwal.*') ? 'active' : '' }}">
            <span class="nav-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </span>
            <span class="nav-label">Jadwal Makeup</span>
        </a>

        {{-- Paket --}}
        <a href="{{ route('paket.index') }}"
           class="sidebar-nav-item {{ request()->routeIs('paket.*') ? 'active' : '' }}">
            <span class="nav-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                </svg>
            </span>
            <span class="nav-label">Paket Makeup</span>
        </a>

        <div class="sidebar-section-label" style="margin-top:14px;">Lainnya</div>

        {{-- Halaman Utama --}}
        <a href="{{ url('/') }}" class="sidebar-nav-item">
            <span class="nav-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
            </span>
            <span class="nav-label">Halaman Utama</span>
        </a>
    </nav>

    {{-- Footer quote --}}
    <div class="sidebar-footer">
        <p class="sidebar-footer-text">✦ Beauty is an art ✦</p>
    </div>

</aside>
