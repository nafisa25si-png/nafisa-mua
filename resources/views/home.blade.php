@extends('layouts.app')

@section('title', 'Maison Coquette — MUA & Beauty Studio')

@section('content')

{{-- ═══════════════════ HERO SECTION ═══════════════════ --}}
<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
                <div class="icon">
                    <span class="flaticon-lotus"></span>
                </div>
                <h1>Maison Coquette</h1>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-3">
                        <p>Studio Makeup &amp; Beauty terpercaya dengan sentuhan elegan, feminin, dan profesional untuk setiap momen istimewa Anda.</p>
                    </div>
                </div>
                <p>
                    <a href="#treatments" class="btn btn-primary p-3 px-5 py-4 mr-md-2">
                        Lihat Layanan
                    </a>
                    <a href="{{ url('/admin') }}" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">
                        Panel Admin
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ INTRO / KEUNGGULAN ═══════════════════ --}}
<section class="ftco-section ftco-intro" style="background-image: url(images/intro.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <div class="heading-section ftco-animate">
                    <h2 class="mb-4">Keunggulan Layanan Maison Coquette</h2>
                </div>
                <p class="ftco-animate">Kami menghadirkan riasan profesional berkualitas tinggi dengan sentuhan lembut dan bahan kosmetik premium yang ramah untuk semua jenis kulit.</p>
                <ul class="mt-5 do-list">
                    <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Produk kosmetik original &amp; bersertifikasi aman</a></li>
                    <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Teknik rias tahan lama &amp; natural flawless</a></li>
                    <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Konsultasi tema &amp; konsep busana personal</a></li>
                    <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Tepat waktu &amp; pelayanan ramah profesional</a></li>
                    <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Paket hemat untuk wisuda, pre-wedding &amp; wedding</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ ABOUT / DEALS ═══════════════════ --}}
<section class="ftco-section ftco-no-pt ftco-no-pb" id="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="offer-deal text-center px-2 px-lg-5">
                    <div class="img" style="background-image: url(images/offer-deal-1.jpg);"></div>
                    <div class="text mt-4">
                        <h3 class="mb-4">Book Your Treatment</h3>
                        <p class="mb-5">Jadwalkan sesi makeup impian Anda dengan mudah bersama tim profesional Maison Coquette.</p>
                        <p><a href="#treatments" class="btn btn-white px-4 py-3"> Pesan Sekarang <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="offer-deal active text-center px-2 px-lg-5">
                    <div class="img" style="background-image: url(images/offer-deal-2.jpg);"></div>
                    <div class="text mt-4">
                        <h3 class="mb-4">Great Gift Packages</h3>
                        <p class="mb-5">Paket spesial lengkap dengan hair-do/hijab-do dan sentuhan elegan di hari bahagia Anda.</p>
                        <p><a href="#pricing" class="btn btn-white px-4 py-3"> Lihat Paket <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="offer-deal text-center px-2 px-lg-5">
                    <div class="img" style="background-image: url(images/offer-deal-3.jpg);"></div>
                    <div class="text mt-4">
                        <h3 class="mb-4">Special Offer &amp; Deal</h3>
                        <p class="mb-5">Dapatkan penawaran harga menarik untuk pemesanan rombongan bridesmaid dan wisuda.</p>
                        <p><a href="#contact" class="btn btn-white px-4 py-3"> Hubungi Kami <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ SERVICES ═══════════════════ --}}
<section class="ftco-section ftco-section-services bg-light" id="services">
    <div class="container-fluid px-md-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="services text-center ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-candle"></span>
                    </div>
                    <div class="text mt-3">
                        <h3>Bridal &amp; Wedding</h3>
                        <p>Riasan pengantin adat maupun modern internasional dengan hasil akhir mewah dan tahan seharian.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services text-center ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-beauty-treatment"></span>
                    </div>
                    <div class="text mt-3">
                        <h3>Graduation Makeup</h3>
                        <p>Tampil percaya diri, anggun, dan segar saat momen wisuda Anda dengan look flawless natural.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services text-center ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-stone"></span>
                    </div>
                    <div class="text mt-3">
                        <h3>Engagement &amp; Prewed</h3>
                        <p>Look makeup romantis dan photogenic yang sempurna untuk sesi foto dokumentasi cinta Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services text-center ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-relax"></span>
                    </div>
                    <div class="text mt-3">
                        <h3>Party &amp; Event</h3>
                        <p>Makeup pesta, photoshoot, dan acara keluarga dengan gaya yang disesuaikan karakter wajah Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ TREATMENTS & PRICING ACCORDION ═══════════════════ --}}
<section class="ftco-section" id="treatments">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-12 heading-section ftco-animate text-center">
                <h3 class="subheading">Layanan Eksklusif</h3>
                <h2 class="mb-1">Pilihan Treatment &amp; Makeup</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-candle"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Flawless Base</h3>
                                <p>Kompleksi kulit halus tanpa cakey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-spa-1"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Eye Perfection</h3>
                                <p>Rias mata tegas dan memikat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-stone"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Hair-Do Styling</h3>
                                <p>Penataan rambut rapi dan elegan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lotus"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Hijab Styling</h3>
                                <p>Kreasi hijab modern &amp; syar'i.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3>Daftar Harga</h3>
                        <p>Penawaran transparan sesuai kebutuhan acara Anda</p>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Paket Wisuda &amp; Pesta
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body text-left">
                                <ul>
                                    <li class="d-flex justify-content-between">
                                        <span>Graduation Regular</span>
                                        <span>Rp 250.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Graduation + Hairdo</span>
                                        <span>Rp 350.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Party / Event Makeup</span>
                                        <span>Rp 300.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Photoshoot Makeup</span>
                                        <span>Rp 400.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Paket Wedding &amp; Engagement
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body text-left">
                                <ul>
                                    <li class="d-flex justify-content-between">
                                        <span>Lamaran / Engagement</span>
                                        <span>Rp 750.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Pre-Wedding Session</span>
                                        <span>Rp 1.000.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Akad Nikah Only</span>
                                        <span>Rp 1.500.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Wedding Resepsi Komplit</span>
                                        <span>Rp 3.500.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-beauty-treatment"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Skin Prep</h3>
                                <p>Persiapan kulit ekstra glowing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-relax"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Lash Extension</h3>
                                <p>Bulu mata ringan &amp; bervolume.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-massage"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Lip Tint &amp; Gloss</h3>
                                <p>Bibir plump sehat dan merona.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-rose"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Touch Up Set</h3>
                                <p>Perlengkapan touch-up seharian.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ PRICING ═══════════════════ --}}
<section class="ftco-section bg-light" id="pricing">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Paket Membership</h3>
                <h2 class="mb-1">Pilihan Paket Langganan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Silver Package</h2>
                        <span class="price"><span class="number">250K</span></span>
                        <span class="excerpt d-block">1x Sesi Regular</span>

                        <h3 class="heading-2 my-4">Fitur Termasuk</h3>

                        <ul class="pricing-text mb-5">
                            <li>Makeup Natural Flawless</li>
                            <li>Bulu Mata Standar</li>
                            <li>Hair-Do / Hijab Standar</li>
                            <li>Ketahanan s/d 8 Jam</li>
                        </ul>

                        <a href="#contact" class="btn btn-primary d-block px-2 py-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Gold Package</h2>
                        <span class="price"><span class="number">650K</span></span>
                        <span class="excerpt d-block">Paket Favorit</span>

                        <h3 class="heading-2 my-4">Fitur Termasuk</h3>

                        <ul class="pricing-text mb-5">
                            <li>Makeup Premium HD Look</li>
                            <li>Bulu Mata 3D Layering</li>
                            <li>Hair-Do / Hijab Stylist Eksklusif</li>
                            <li>Skin Prep Serum Khusus</li>
                        </ul>

                        <a href="#contact" class="btn btn-primary d-block px-2 py-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Platinum VIP</h2>
                        <span class="price"><span class="number">1.5M</span></span>
                        <span class="excerpt d-block">Paket Lengkap VIP</span>

                        <h3 class="heading-2 my-4">Fitur Termasuk</h3>

                        <ul class="pricing-text mb-5">
                            <li>Exclusive Bridal / Engagement Look</li>
                            <li>Standby Touch Up di Lokasi</li>
                            <li>Free Softlens &amp; Nail Art Simple</li>
                            <li>Emergency Touch-Up Kit</li>
                        </ul>

                        <a href="#contact" class="btn btn-primary d-block px-2 py-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ TESTIMONIALS ═══════════════════ --}}
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-10 heading-section ftco-animate text-center">
                <h3 class="subheading">Testimoni Klien</h3>
                <h2 class="mb-1">Pengalaman Bersama Maison Coquette</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="text">
                                <div class="line pl-5">
                                    <p class="mb-4 pb-1">Makeup wisuda aku awet banget dari pagi subuh sampai sore wisuda selesai! Hasilnya flawless dan nggak crack sama sekali. Terima kasih Maison Coquette!</p>
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="ml-4">
                                        <p class="name">Sarah Amelia</p>
                                        <span class="position">Wisudawati</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="text">
                                <div class="line pl-5">
                                    <p class="mb-4 pb-1">Suka banget sama look makeup lamaran aku. Natural tapi kelihatan manglingi dan elegan. Kakaknya sabar banget dan detail!</p>
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="ml-4">
                                        <p class="name">Dinda Kirana</p>
                                        <span class="position">Klien Lamaran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="text">
                                <div class="line pl-5">
                                    <p class="mb-4 pb-1">Pilihan warna eyeshadow dan blush on-nya pas banget di undertone kulit aku. Banyak tamu undangan yang muji hasil riasannya!</p>
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="ml-4">
                                        <p class="name">Nadia Safitri</p>
                                        <span class="position">Klien Pesta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="text">
                                <div class="line pl-5">
                                    <p class="mb-4 pb-1">Pelayanan sangat on time, ramah, dan komunikatif. Hasil foto-foto prewed jadi cantik maksimal berkat makeup Maison Coquette.</p>
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                    <div class="ml-4">
                                        <p class="name">Putri Rahmawati</p>
                                        <span class="position">Bride to be</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ COUNTER ═══════════════════ --}}
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1250">0</strong>
                                <span>Klien Bahagia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="15">0</strong>
                                <span>Pilihan Paket</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="5">0</strong>
                                <span>Tahun Pengalaman</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="500">0</strong>
                                <span>Event &amp; Wedding</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ BLOG ═══════════════════ --}}
<section class="ftco-section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Tips &amp; Inspirasi</h3>
                <h2 class="mb-1">Artikel Kecantikan Terbaru</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="#" class="block-20" style="background-image: url('images/image_1.jpg');"></a>
                    <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                                <span class="day">15</span>
                            </div>
                            <div class="two">
                                <span class="yr">2026</span>
                                <span class="mos">Oktober</span>
                            </div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Rahasia Makeup Tahan Seharian Tanpa Retak</a></h3>
                        <p>Tips skin prep terbaik sebelum mengaplikasikan foundation agar riasan menyatu sempurna dengan kulit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="#" class="block-20" style="background-image: url('images/image_2.jpg');"></a>
                    <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                                <span class="day">10</span>
                            </div>
                            <div class="two">
                                <span class="yr">2026</span>
                                <span class="mos">Oktober</span>
                            </div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Tren Makeup Pengantin Elegan &amp; Modern</a></h3>
                        <p>Eksplorasi gaya makeup soft glam dengan sentuhan warna peach dan rose yang sedang populer tahun ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="#" class="block-20" style="background-image: url('images/image_3.jpg');"></a>
                    <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                                <span class="day">02</span>
                            </div>
                            <div class="two">
                                <span class="yr">2026</span>
                                <span class="mos">Oktober</span>
                            </div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Panduan Memilih Warna Lipstik Sesuai Undertone</a></h3>
                        <p>Ketahui apakah kulit Anda bertipe warm, cool, atau neutral undertone untuk pilihan warna bibir yang pas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ GALLERY ═══════════════════ --}}
<section class="ftco-gallery ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Galeri Karya</h3>
                <h2 class="mb-1">Portofolio Maison Coquette</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
