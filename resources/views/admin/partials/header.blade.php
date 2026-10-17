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

        {{-- Admin User --}}
        <div class="topbar-admin">
            <div class="admin-avatar">A</div>
            <span class="admin-name">Admin</span>
        </div>
    </div>
</header>
