<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Maison Coquette — MUA & Beauty Studio')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Prata&display=swap" rel="stylesheet">

    {{-- Maison Coquette Home Design System --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/css/maison-home.css') }}">

    @stack('styles')
</head>
<body class="mc-home-body">

    {{-- Header & Navbar Partial --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Partial --}}
    @include('partials.footer')

    {{-- Mobile Navigation Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileBtn = document.getElementById('mcMobileToggle');
            const mobileNav = document.getElementById('mcMobileNav');

            if (mobileBtn && mobileNav) {
                mobileBtn.addEventListener('click', function() {
                    const isHidden = mobileNav.style.display === 'none' || mobileNav.style.display === '';
                    mobileNav.style.display = isHidden ? 'flex' : 'none';
                });

                // Auto-close menu when link clicked
                mobileNav.querySelectorAll('a').forEach(function(link) {
                    link.addEventListener('click', function() {
                        mobileNav.style.display = 'none';
                    });
                });
            }
        });
    </script>

    @stack('scripts')

</body>
</html>
