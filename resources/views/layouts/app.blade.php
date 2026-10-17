<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Maison Coquette — MUA & Beauty Studio')</title>

    <!-- CSS Guest -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>

    {{-- Partial: Header / Navbar --}}
    @include('partials.header')

    {{-- Main Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Partial: Footer --}}
    @include('partials.footer')

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#d96c91"/>
        </svg>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')

</body>
</html>
