<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Maison Coquette</title>

    {{-- Google Fonts --}}
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

    {{-- Partial: Sidebar --}}
    @include('admin.partials.sidebar')

    {{-- Main Content --}}
    <div class="main-content">

        {{-- Partial: Header --}}
        @include('admin.partials.header')

        {{-- Page Content --}}
        <main class="page-content">
            {{-- Partial: Alerts --}}
            @include('admin.partials.alerts')

            @yield('content')
        </main>

        {{-- Partial: Footer --}}
        @include('admin.partials.footer')

    </div>

</div>

{{-- Sidebar Toggle Script --}}
<script>
    const sidebar   = document.getElementById('sidebar');
    const overlay   = document.getElementById('sidebarOverlay');
    const toggleBtn = document.getElementById('sidebarToggle');

    function openSidebar() {
        if (!sidebar || !overlay) return;
        sidebar.classList.add('open');
        overlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        if (!sidebar || !overlay) return;
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        });
    }

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }
</script>

@stack('scripts')

</body>
</html>
