<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Maison Coquette</title>

    {{-- Google Fonts preload --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Maison Admin CSS --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/css/maison-admin.css') }}">

    @stack('head')
</head>
<body>

{{-- Mobile overlay --}}
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="admin-shell">

    {{-- ═══════════════════ SIDEBAR ═══════════════════ --}}
    <aside class="sidebar" id="sidebar">

        {{-- Brand --}}
        <a class="sidebar-brand" href="{{ url('/admin') }}">
            <div class="sidebar-brand-logo-placeholder">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                     stroke="white" stroke-width="1.8" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M12 2C8 2 5 5 5 9c0 4.5 4 8 7 11 3-3 7-6.5 7-11 0-4-3-7-7-7z"/>
                    <circle cx="12" cy="9" r="2.5"/>
                </svg>
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

            {{-- Logout --}}
            <a href="{{ url('/') }}"
               class="sidebar-nav-item">
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
    {{-- End Sidebar --}}

    {{-- ═══════════════════ MAIN ═══════════════════ --}}
    <div class="main-content">

        {{-- Topbar --}}
        <header class="topbar">
            <div style="display:flex;align-items:center;gap:14px;">
                {{-- Mobile toggle --}}
                <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle sidebar">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
                <div class="topbar-left">
                    <div class="topbar-breadcrumb">Admin · @yield('breadcrumb', 'Dashboard')</div>
                    <div class="topbar-title">@yield('page-title', 'Dashboard')</div>
                </div>
            </div>

            <div class="topbar-right">
                {{-- Search --}}
                <div class="topbar-search">
                    <svg class="topbar-search-icon" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                    <input type="text" placeholder="Cari sesuatu…" id="topbarSearch">
                </div>

                {{-- Notification --}}
                <a class="topbar-notif" href="#" title="Notifikasi">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                    <span class="notif-dot"></span>
                </a>

                {{-- Admin --}}
                <div class="topbar-admin">
                    <div class="admin-avatar">A</div>
                    <span class="admin-name">Admin</span>
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="page-content">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="admin-footer">
            &copy; {{ date('Y') }} <span>Maison Coquette</span> — All rights reserved.
        </footer>

    </div>
    {{-- End Main --}}

</div>

<script>
    // Mobile sidebar toggle
    const sidebar        = document.getElementById('sidebar');
    const overlay        = document.getElementById('sidebarOverlay');
    const toggleBtn      = document.getElementById('sidebarToggle');

    function openSidebar() {
        sidebar.classList.add('open');
        overlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (toggleBtn) toggleBtn.addEventListener('click', () => {
        sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
    });

    if (overlay) overlay.addEventListener('click', closeSidebar);
</script>

@stack('scripts')

</body>
</html>
