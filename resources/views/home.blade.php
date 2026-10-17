@extends('layouts.app')

@section('title', 'Maison Coquette — MUA & Beauty Studio Jakarta')

@section('content')

{{-- ═══════════════════ HERO SECTION ═══════════════════ --}}
<section class="mc-hero" id="hero">
    <div class="mc-container">
        <div class="mc-hero-grid">

            {{-- Left Content --}}
            <div class="mc-hero-content">
                <div class="mc-hero-tagline">
                    <span class="mc-badge">✦ Atelier de Beauté · Jakarta ✦</span>
                </div>

                <h1 class="mc-hero-title">
                    Mewujudkan Pesona Anggun di Setiap <em>Momen Istimewa</em>
                </h1>

                <p class="mc-hero-desc">
                    Studio tata rias eksklusif dengan sentuhan mewah, feminin, dan natural flawless. Menggunakan produk premium internasional untuk riasan tahan 12+ jam yang memancarkan kecantikan terbaik Anda.
                </p>

                <div class="mc-hero-cta">
                    <a href="#booking" class="mc-btn mc-btn-primary">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        Reservasi Sesi Sekarang
                    </a>
                    <a href="#paket" class="mc-btn mc-btn-secondary">
                        Lihat Pilihan Paket
                    </a>
                </div>

                {{-- Trust Numbers --}}
                <div class="mc-hero-trust">
                    <div class="mc-trust-item">
                        <span class="mc-trust-number">500+</span>
                        <span class="mc-trust-label">Klien Puas &amp; Wisudawati</span>
                    </div>
                    <div class="mc-trust-item">
                        <span class="mc-trust-number">100%</span>
                        <span class="mc-trust-label">Kosmetik Original &amp; Higienis</span>
                    </div>
                    <div class="mc-trust-item">
                        <span class="mc-trust-number">4.9 ★</span>
                        <span class="mc-trust-label">Rating Kepuasan Klien</span>
                    </div>
                </div>
            </div>

            {{-- Right Visual --}}
            <div class="mc-hero-visual">
                <div class="mc-hero-card-main">
                    <img src="{{ asset('images/bg_1.jpg') }}" alt="Maison Coquette Makeup Artistry">
                </div>

                {{-- Floating Badge 1 --}}
                <div class="mc-hero-badge-float">
                    <div class="mc-float-icon">💄</div>
                    <div>
                        <div class="mc-float-title">Soft Glam Look</div>
                        <div class="mc-float-sub">Flawless, Ringan &amp; Tahan Lama</div>
                    </div>
                </div>

                {{-- Floating Badge 2 --}}
                <div class="mc-hero-badge-gold">
                    <div class="mc-badge-gold-stars">★★★★★</div>
                    <div class="mc-badge-gold-text">Best MUA Studio 2026</div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════ ABOUT US / TENTANG KAMI ═══════════════════ --}}
<section class="mc-about-section" id="tentang">
    <div class="mc-container">
        <div class="mc-about-grid">

            {{-- Kolom Kiri: Visual --}}
            <div class="mc-about-visual">
                <div class="mc-about-image-main">
                    <img
                        src="{{ asset('images/bg_1.jpg') }}"
                        alt="Maison Coquette Beauty Studio"
                    >
                </div>

                <div class="mc-about-image-decoration"></div>

                <div class="mc-about-experience">
                    <span class="mc-about-experience-icon">✦</span>
                    <div>
                        <strong>Beauty in Every Detail</strong>
                        <span>Elegance · Confidence · Beauty</span>
                    </div>
                </div>

                <div class="mc-about-floating-text">
                    MAISON COQUETTE
                </div>
            </div>

            {{-- Kolom Kanan: Informasi --}}
            <div class="mc-about-content">
                <span class="mc-badge mc-badge-gold">
                    ✦ Tentang Maison Coquette ✦
                </span>

                <h2 class="mc-about-title">
                    Lebih dari Sekadar Riasan,
                    <em>Merayakan Kecantikan Anda</em>
                </h2>

                <p class="mc-about-paragraph">
                    Maison Coquette adalah studio tata rias yang hadir
                    untuk membantu setiap perempuan tampil anggun,
                    percaya diri, dan memukau dalam setiap momen istimewa.
                    Kami percaya bahwa setiap perempuan memiliki
                    kecantikan unik yang layak ditonjolkan.
                </p>

                <p class="mc-about-paragraph">
                    Dengan sentuhan makeup yang elegan, feminin, dan
                    natural flawless, kami menghadirkan riasan yang
                    disesuaikan dengan karakter wajah, undertone kulit,
                    serta kebutuhan setiap klien. Mulai dari wisuda,
                    lamaran, prewedding, hingga pernikahan dan acara spesial
                    lainnya.
                </p>

                <p class="mc-about-paragraph">
                    Kami mengutamakan detail, kenyamanan, dan kebersihan
                    dengan penggunaan produk kosmetik premium serta teknik
                    makeup profesional. Tersedia pula layanan home service
                    untuk memberikan pengalaman kecantikan yang praktis
                    dan nyaman bagi Anda.
                </p>

                {{-- Nilai Utama --}}
                <div class="mc-about-values">
                    <div class="mc-about-value">
                        <span class="mc-about-value-icon">✧</span>
                        <div>
                            <h4>Personalized Beauty</h4>
                            <p>Riasan yang disesuaikan dengan karakter Anda.</p>
                        </div>
                    </div>

                    <div class="mc-about-value">
                        <span class="mc-about-value-icon">♡</span>
                        <div>
                            <h4>Elegan &amp; Natural</h4>
                            <p>Menonjolkan kecantikan tanpa kehilangan jati diri.</p>
                        </div>
                    </div>

                    <div class="mc-about-value">
                        <span class="mc-about-value-icon">✦</span>
                        <div>
                            <h4>Quality &amp; Hygiene</h4>
                            <p>Memprioritaskan kualitas produk dan kebersihan.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════ FEATURES / WHY CHOOSE US ═══════════════════ --}}
<section class="mc-features-section" id="layanan">
    <div class="mc-container">
        <div class="mc-section-header">
            <span class="mc-badge mc-badge-gold">✦ Keunggulan Kami ✦</span>
            <h2 class="mc-section-title">Mengapa Memilih <span>Maison Coquette</span>?</h2>
            <p class="mc-section-sub">
                Kami menggabungkan seni rias berkelas dengan kenyamanan layanan untuk memastikan penampilan Anda tak terlupakan.
            </p>
        </div>

        <div class="mc-features-grid">
            {{-- Feature 1 --}}
            <div class="mc-feature-card">
                <div class="mc-feature-icon">✨</div>
                <h3 class="mc-feature-title">Complexion 12+ Jam</h3>
                <p class="mc-feature-desc">
                    Teknik skin prep mendalam dan penguncian makeup khusus agar riasan tetap segar, anti-crack, dan bebas minyak sepanjang hari.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div class="mc-feature-card">
                <div class="mc-feature-icon">💎</div>
                <h3 class="mc-feature-title">Produk Internasional</h3>
                <p class="mc-feature-desc">
                    Hanya menggunakan kosmetik original bersertifikasi (Dior, Charlotte Tilbury, NARS, MAC) yang aman untuk semua jenis kulit.
                </p>
            </div>

            {{-- Feature 3 --}}
            <div class="mc-feature-card">
                <div class="mc-feature-icon">🎨</div>
                <h3 class="mc-feature-title">Look Personal &amp; Detail</h3>
                <p class="mc-feature-desc">
                    Setiap riasan disesuaikan dengan undertone kulit, bentuk wajah, dan tema busana agar karakter alami Anda terpancar sempurna.
                </p>
            </div>

            {{-- Feature 4 --}}
            <div class="mc-feature-card">
                <div class="mc-feature-icon">🚗</div>
                <h3 class="mc-feature-title">Home Service &amp; On-Time</h3>
                <p class="mc-feature-desc">
                    Siap hadir tepat waktu di rumah, hotel, maupun venue acara Anda dengan perlengkapan lengkap dan higienis.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ DYNAMIC PACKAGES (FROM DATABASE) ═══════════════════ --}}
<section class="mc-packages-section" id="paket">
    <div class="mc-container">
        <div class="mc-section-header">
            <span class="mc-badge">✦ Pilihan Layanan Kami ✦</span>
            <h2 class="mc-section-title">Paket Makeup <span>Eksklusif</span></h2>
            <p class="mc-section-sub">
                Daftar paket tata rias resmi Maison Coquette. Pilih paket yang sesuai kebutuhan acara spesial Anda.
            </p>
        </div>

        <div class="mc-packages-grid">
            @forelse($dataPaket as $paket)
                <div class="mc-package-card {{ $loop->iteration == 2 ? 'highlight' : '' }}">
                    @if($loop->iteration == 2)
                        <div class="mc-package-card-ribbon">Paling Favorit</div>
                    @endif

                    <div class="mc-package-top">
                        <span class="mc-badge" style="font-size:11px; padding:4px 12px; margin-bottom:12px;">
                            Paket #{{ $loop->iteration }}
                        </span>
                        <h3 class="mc-package-name">{{ $paket->nama_paket }}</h3>

                        <div class="mc-package-price">
                            <span class="mc-price-curr">Rp</span>
                            <span class="mc-price-val">{{ number_format($paket->harga, 0, ',', '.') }}</span>
                            <span class="mc-price-unit">/ sesi</span>
                        </div>

                        <p class="mc-package-desc">
                            {{ $paket->deskripsi ?: 'Layanan tata rias profesional lengkap dengan sentuhan personal Maison Coquette.' }}
                        </p>
                    </div>

                    <ul class="mc-package-perks">
                        <li>
                            <span class="mc-perk-icon">✓</span>
                            <span>Makeup Flawless &amp; Tahan Lama</span>
                        </li>
                        <li>
                            <span class="mc-perk-icon">✓</span>
                            <span>Skin Prep &amp; Serum Khusus</span>
                        </li>
                        <li>
                            <span class="mc-perk-icon">✓</span>
                            <span>Bulu Mata Premium Layering</span>
                        </li>
                        <li>
                            <span class="mc-perk-icon">✓</span>
                            <span>Penataan Rambut / Hijab Styling</span>
                        </li>
                    </ul>

                    <button type="button"
                            class="mc-btn mc-btn-primary mc-package-btn"
                            onclick="selectPackage('{{ $paket->id }}', '{{ addslashes($paket->nama_paket) }}')">
                        Pilih &amp; Reservasi
                    </button>
                </div>
            @empty
                <div class="mc-empty-box">
                    <div style="font-size:42px; margin-bottom:12px;">💄</div>
                    <h3 style="font-family:var(--font-heading); font-size:24px; color:var(--mc-text-dark); margin-bottom:8px;">
                        Paket Makeup Sedang Diperbarui
                    </h3>
                    <p style="color:var(--mc-text-muted); font-size:15px; margin-bottom:20px;">
                        Silakan hubungi kami langsung via WhatsApp untuk daftar harga dan layanan khusus.
                    </p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="mc-btn mc-btn-primary">
                        Tanya via WhatsApp
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- ═══════════════════ ONLINE BOOKING SECTION ═══════════════════ --}}
<section class="mc-booking-section" id="booking">
    <div class="mc-container">

        {{-- Success Alert --}}
        @if(session('booking_success'))
            <div class="mc-success-box">
                <div class="mc-success-icon">✓</div>
                <div>
                    <strong style="display:block; font-size:16px;">Reservasi Berhasil!</strong>
                    <span>{{ session('booking_success') }}</span>
                </div>
            </div>
        @endif

        {{-- Validation Error --}}
        @if($errors->any())
            <div style="background:#FDF2F4; border:1px solid #F5C6CB; color:#721C24; padding:18px 24px; border-radius:12px; margin-bottom:24px;">
                <strong>Mohon lengkapi formulir dengan benar:</strong>
                <ul style="margin-top:6px; padding-left:20px;">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mc-booking-card">

            {{-- Left Info Column --}}
            <div class="mc-booking-info">
                <div>
                    <div class="mc-booking-info-header">
                        <span class="mc-badge mc-badge-gold">✦ Reservasi Online ✦</span>
                        <h3 style="margin-top:14px;">Jadwalkan Sesi Cantik Anda</h3>
                        <p>
                            Isi formulir untuk memesan jadwal makeup. Jadwal Anda akan langsung masuk ke sistem admin kami untuk konfirmasi ketersediaan tanggal.
                        </p>
                    </div>

                    <div class="mc-booking-contact-list">
                        <div class="mc-bcontact-item">
                            <div class="mc-bcontact-icon">📍</div>
                            <div>
                                <div class="mc-bcontact-label">Lokasi Studio</div>
                                <div class="mc-bcontact-value">Kemang, Jakarta Selatan (Bisa Home Service)</div>
                            </div>
                        </div>

                        <div class="mc-bcontact-item">
                            <div class="mc-bcontact-icon">💬</div>
                            <div>
                                <div class="mc-bcontact-label">WhatsApp Fast Response</div>
                                <div class="mc-bcontact-value">+62 812-3456-7890</div>
                            </div>
                        </div>

                        <div class="mc-bcontact-item">
                            <div class="mc-bcontact-icon">⏰</div>
                            <div>
                                <div class="mc-bcontact-label">Jam Operasional</div>
                                <div class="mc-bcontact-value">Setiap Hari · 06.00 – 21.00 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Direct WhatsApp Button --}}
                <div style="padding-top:20px; border-top:1px solid var(--mc-border);">
                    <p style="font-size:13px; color:var(--mc-text-muted); margin-bottom:10px;">
                        Butuh respon darurat atau konsultasi langsung?
                    </p>
                    <a href="https://wa.me/6281234567890?text=Halo%20Maison%20Coquette,%20saya%20ingin%20tanya%20jadwal%20makeup"
                       target="_blank"
                       class="mc-btn mc-btn-gold"
                       style="width:100%;">
                        Chat WhatsApp Sekarang
                    </a>
                </div>
            </div>

            {{-- Right Form Column --}}
            <div class="mc-booking-form-wrap">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf

                    <div class="mc-form-grid">

                        {{-- Nama --}}
                        <div class="mc-form-group mc-form-full">
                            <label class="mc-form-label" for="nama">
                                Nama Lengkap <span class="req">*</span>
                            </label>
                            <input type="text"
                                   id="nama"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   class="mc-input"
                                   placeholder="Contoh: Putri Nabila"
                                   required>
                        </div>

                        {{-- WhatsApp / No HP --}}
                        <div class="mc-form-group">
                            <label class="mc-form-label" for="no_hp">
                                Nomor WhatsApp / HP <span class="req">*</span>
                            </label>
                            <input type="tel"
                                   id="no_hp"
                                   name="no_hp"
                                   value="{{ old('no_hp') }}"
                                   class="mc-input"
                                   placeholder="08xxxxxxxxxx"
                                   required>
                        </div>

                        {{-- Email --}}
                        <div class="mc-form-group">
                            <label class="mc-form-label" for="email">
                                Alamat Email
                            </label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="mc-input"
                                   placeholder="nama@email.com">
                        </div>

                        {{-- Pilihan Paket Makeup (Dynamic from Database) --}}
                        <div class="mc-form-group mc-form-full">
                            <label class="mc-form-label" for="paket_id">
                                Pilihan Paket Makeup <span class="req">*</span>
                            </label>
                            <select id="paket_id" name="paket_id" class="mc-select" required>
                                <option value="" disabled {{ old('paket_id') ? '' : 'selected' }}>
                                    -- Pilih Paket Layanan --
                                </option>
                                @foreach($dataPaket as $paket)
                                    <option value="{{ $paket->id }}"
                                        {{ old('paket_id') == $paket->id ? 'selected' : '' }}>
                                        {{ $paket->nama_paket }} — Rp {{ number_format($paket->harga, 0, ',', '.') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tanggal Makeup --}}
                        <div class="mc-form-group">
                            <label class="mc-form-label" for="tanggal">
                                Tanggal Acara <span class="req">*</span>
                            </label>
                            <input type="date"
                                   id="tanggal"
                                   name="tanggal"
                                   value="{{ old('tanggal', date('Y-m-d')) }}"
                                   min="{{ date('Y-m-d') }}"
                                   class="mc-input"
                                   required>
                        </div>

                        {{-- Waktu Makeup --}}
                        <div class="mc-form-group">
                            <label class="mc-form-label" for="waktu">
                                Waktu Selesai Makeup <span class="req">*</span>
                            </label>
                            <input type="time"
                                   id="waktu"
                                   name="waktu"
                                   value="{{ old('waktu', '08:00') }}"
                                   class="mc-input"
                                   required>
                        </div>

                        {{-- Alamat / Catatan --}}
                        <div class="mc-form-group mc-form-full">
                            <label class="mc-form-label" for="alamat">
                                Alamat / Lokasi Acara &amp; Catatan Khusus
                            </label>
                            <textarea id="alamat"
                                      name="alamat"
                                      rows="3"
                                      class="mc-textarea"
                                      placeholder="Sebutkan lokasi acara (Studio Kemang / Home service di hotel/rumah) serta request tema makeup jika ada…">{{ old('alamat') }}</textarea>
                        </div>

                        {{-- Submit Button --}}
                        <div class="mc-form-full" style="margin-top:10px;">
                            <button type="submit" class="mc-btn mc-btn-primary" style="width:100%; padding:15px 28px; font-size:16px;">
                                Kirim Reservasi Sekarang
                            </button>
                            <p style="text-align:center; font-size:12px; color:var(--mc-text-muted); margin-top:10px;">
                                🔒 Data Anda aman &amp; tidak akan dibagikan ke pihak ketiga.
                            </p>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════ PORTFOLIO / GALLERY ═══════════════════ --}}
<section class="mc-gallery-section" id="portofolio">
    <div class="mc-container">
        <div class="mc-section-header">
            <span class="mc-badge">✦ Portofolio Karya ✦</span>
            <h2 class="mc-section-title">Galeri Riasan <span>Maison Coquette</span></h2>
            <p class="mc-section-sub">
                Setiap sentuhan kuas dirancang untuk menampilkan kepribadian unik dan kecantikan alami setiap klien.
            </p>
        </div>

        <div class="mc-gallery-grid">
            <div class="mc-gallery-item">
                <img src="{{ asset('images/gallery-1.jpg') }}" alt="Makeup Wisuda Soft Glam">
                <div class="mc-gallery-overlay">
                    <span class="mc-gallery-tag">Wisuda</span>
                    <h4 class="mc-gallery-title">Soft Glam Natural</h4>
                </div>
            </div>

            <div class="mc-gallery-item">
                <img src="{{ asset('images/gallery-2.jpg') }}" alt="Bridal Makeup Modern">
                <div class="mc-gallery-overlay">
                    <span class="mc-gallery-tag">Bridal</span>
                    <h4 class="mc-gallery-title">Modern Wedding Glow</h4>
                </div>
            </div>

            <div class="mc-gallery-item">
                <img src="{{ asset('images/gallery-3.jpg') }}" alt="Makeup Lamaran & Engagement">
                <div class="mc-gallery-overlay">
                    <span class="mc-gallery-tag">Lamaran</span>
                    <h4 class="mc-gallery-title">Romantic Peach Tone</h4>
                </div>
            </div>

            <div class="mc-gallery-item">
                <img src="{{ asset('images/gallery-4.jpg') }}" alt="Photoshoot & Party Look">
                <div class="mc-gallery-overlay">
                    <span class="mc-gallery-tag">Party</span>
                    <h4 class="mc-gallery-title">Editorial Elegance</h4>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ TESTIMONIALS ═══════════════════ --}}
<section class="mc-testimonials-section" id="testimoni">
    <div class="mc-container">
        <div class="mc-section-header">
            <span class="mc-badge mc-badge-gold">✦ Ulasan Klien ✦</span>
            <h2 class="mc-section-title">Kisah Bahagia <span>Bersama Kami</span></h2>
            <p class="mc-section-sub">
                Kepercayaan dan senyum kepuasan klien adalah penghargaan terbaik bagi setiap karya kami.
            </p>
        </div>

        <div class="mc-testimonials-grid">
            <div class="mc-testi-card">
                <div>
                    <div class="mc-testi-stars">★★★★★</div>
                    <p class="mc-testi-quote">
                        "Makeup wisuda aku awet dari jam 5 subuh sampai maghrib selesai foto outdoor! Nggak geser, nggak crack di smile line, dan hasilnya flawless banget di kamera."
                    </p>
                </div>
                <div class="mc-testi-author">
                    <img src="{{ asset('images/person_1.jpg') }}" alt="Sarah Amelia" class="mc-testi-avatar">
                    <div>
                        <div class="mc-testi-name">Sarah Amelia</div>
                        <div class="mc-testi-role">Klien Wisuda UI</div>
                    </div>
                </div>
            </div>

            <div class="mc-testi-card">
                <div>
                    <div class="mc-testi-stars">★★★★★</div>
                    <p class="mc-testi-quote">
                        "Suka banget sama look makeup lamaran aku. Natural tapi manglingi dan mewah. Kakaknya sabar banget, alat makeup-nya bersih dan higienis. Recommended!"
                    </p>
                </div>
                <div class="mc-testi-author">
                    <img src="{{ asset('images/person_2.jpg') }}" alt="Dinda Kirana" class="mc-testi-avatar">
                    <div>
                        <div class="mc-testi-name">Dinda Kirana</div>
                        <div class="mc-testi-role">Klien Lamaran &amp; Prewedding</div>
                    </div>
                </div>
            </div>

            <div class="mc-testi-card">
                <div>
                    <div class="mc-testi-stars">★★★★★</div>
                    <p class="mc-testi-quote">
                        "Pilihan warna blush dan eyeshadow-nya pas banget di undertone kulitku. Foundation-nya seringan second skin tapi coveragenya luar biasa. Terima kasih Maison Coquette!"
                    </p>
                </div>
                <div class="mc-testi-author">
                    <img src="{{ asset('images/person_3.jpg') }}" alt="Nadia Safitri" class="mc-testi-avatar">
                    <div>
                        <div class="mc-testi-name">Nadia Safitri</div>
                        <div class="mc-testi-role">Klien Wedding Resepsi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Smooth scroll and package auto-selection
    function selectPackage(packageId, packageName) {
        const select = document.getElementById('paket_id');
        const bookingSection = document.getElementById('booking');

        if (select) {
            select.value = packageId;
        }

        if (bookingSection) {
            bookingSection.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
@endpush
