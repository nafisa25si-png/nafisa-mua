<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="padding-top: 10px; padding-bottom: 10px;">
            <img src="{{ asset('assets-admin/images/logo maison coquette.jpeg') }}"
                 alt="Logo Maison Coquette"
                 style="height: 52px; width: auto; border-radius: 8px; margin-right: 10px;">
            <span style="font-family: 'Prata', serif; font-size: 20px; font-weight: 700; color: #d96c91; letter-spacing: 0.5px;">
                Maison Coquette
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#treatments" class="nav-link">Treatments</a>
                </li>
                <li class="nav-item">
                    <a href="#specialists" class="nav-link">Specialists</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link" style="color: #d96c91; font-weight: 600;">
                        Admin Panel
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
