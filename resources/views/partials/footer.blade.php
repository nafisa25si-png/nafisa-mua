{{-- ═══════════════════ MAISON COQUETTE FOOTER ═══════════════════ --}}
<footer class="mc-footer" id="kontak">
    <div class="mc-container">
        <div class="mc-footer-grid">

            {{-- Brand info --}}
            <div class="mc-footer-brand">
                <h4>Maison <span>Coquette</span></h4>
                <p>
                    Atelier kecantikan &amp; Makeup Artist profesional dengan sentuhan mewah, feminin, dan natural flawless. Mewujudkan kecantikan terbaik Anda di hari istimewa.
                </p>
                <div class="mc-footer-social">
                    <a href="https://instagram.com" target="_blank" class="mc-social-btn" title="Instagram">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="mc-social-btn" title="WhatsApp">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </a>
                    <a href="https://tiktok.com" target="_blank" class="mc-social-btn" title="TikTok">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Nav Links --}}
            <div>
                <h5 class="mc-footer-title">Navigasi</h5>
                <ul class="mc-footer-links">
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#tentang">Filosofi &amp; Keunggulan</a></li>
                    <li><a href="#paket">Pilihan Paket Makeup</a></li>
                    <li><a href="#booking">Formulir Reservasi</a></li>
                    <li><a href="#portofolio">Galeri Portofolio</a></li>
                    <li><a href="{{ url('/admin') }}">Portal Admin MUA</a></li>
                </ul>
            </div>

            {{-- Layanan --}}
            <div>
                <h5 class="mc-footer-title">Layanan Spesialis</h5>
                <ul class="mc-footer-links">
                    <li><a href="#paket">Bridal &amp; Wedding Look</a></li>
                    <li><a href="#paket">Graduation / Wisuda Flawless</a></li>
                    <li><a href="#paket">Engagement &amp; Prewedding</a></li>
                    <li><a href="#paket">Photoshoot &amp; Fashion Event</a></li>
                    <li><a href="#paket">Home Service Makeup</a></li>
                </ul>
            </div>

            {{-- Kontak Studio --}}
            <div>
                <h5 class="mc-footer-title">Kontak &amp; Studio</h5>
                <div class="mc-footer-contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span>Jl. Kemang Raya No. 45, Jakarta Selatan 12730</span>
                </div>
                <div class="mc-footer-contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span>+62 812-3456-7890 (WhatsApp Booking)</span>
                </div>
                <div class="mc-footer-contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span>contact@maisoncoquette.com</span>
                </div>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="mc-footer-bottom">
            <div>
                &copy; {{ date('Y') }} <strong>Maison Coquette</strong>. Hak Cipta Dilindungi.
            </div>
            <div>
                Crafted with elegance &amp; <span>passion for beauty</span>
            </div>
        </div>
    </div>
</footer>
