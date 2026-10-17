{{-- ═══════════════════ MAIN NAVBAR ═══════════════════ --}}
<header class="mc-navbar-wrapper">
    <div class="mc-container">
        <nav class="mc-navbar">
            {{-- Brand Logo & Name --}}
            <a href="{{ url('/') }}" class="mc-nav-brand">
                <img src="{{ asset('assets-admin/images/logo maison coquette.jpeg') }}"
                     alt="Logo Maison Coquette"
                     class="mc-brand-logo-img">
                <div>
                    <span class="mc-brand-title">Maison Coquette</span>
                    <span class="mc-brand-sub">Atelier de Beauté</span>
                </div>
            </a>

            {{-- Navigation Menu --}}
            <ul class="mc-nav-menu">
                <li><a href="#hero" class="mc-nav-link active">Home</a></li>
                <li><a href="#tentang" class="mc-nav-link">Tentang</a></li>
                <li><a href="#layanan" class="mc-nav-link">Keunggulan</a></li>
                <li><a href="#paket" class="mc-nav-link">Paket Makeup</a></li>
                <li><a href="#booking" class="mc-nav-link">Reservasi</a></li>
                <li><a href="#portofolio" class="mc-nav-link">Portofolio</a></li>
                <li><a href="#testimoni" class="mc-nav-link">Testimoni</a></li>
            </ul>

            {{-- Actions --}}
            <div class="mc-nav-actions">
                <a href="#booking" class="mc-btn mc-btn-primary" style="padding: 10px 22px; font-size: 14px;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Booking Sesi
                </a>
                <a href="{{ url('/admin') }}" class="mc-nav-admin-link" title="Masuk ke Dashboard Admin">
                    Admin
                </a>
                <button class="mc-mobile-btn" id="mcMobileToggle" aria-label="Menu">
                    ☰
                </button>
            </div>
        </nav>
    </div>

    {{-- Mobile Dropdown Menu --}}
    <div id="mcMobileNav" style="display: none;" class="mc-mobile-nav">
        <a href="#hero" class="mc-nav-link">Home</a>
        <a href="#tentang" class="mc-nav-link">Tentang Kami</a>
        <a href="#layanan" class="mc-nav-link">Keunggulan</a>
        <a href="#paket" class="mc-nav-link">Paket Makeup</a>
        <a href="#booking" class="mc-nav-link">Reservasi Online</a>
        <a href="#portofolio" class="mc-nav-link">Portofolio</a>
        <a href="#testimoni" class="mc-nav-link">Testimoni</a>
        <a href="{{ url('/admin') }}" class="mc-btn mc-btn-primary" style="margin-top: 8px;">
            Masuk Portal Admin
        </a>
    </div>
</header>
