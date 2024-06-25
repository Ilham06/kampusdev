<header class="header-classic">

    <div class="container-xl header-top">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <!-- site logo -->
                <a class="navbar-brand" href="personal.html"><img src="{{ asset('assets/main-logo.png') }}"
                        alt="logo" /></a>
                <a href="personal.html" class="d-block text-logo">KampusDev<span class="dot">.</span></a>
                <span class="slogan d-block">Temukan semua solusi kebutuhan project kuliahmu disini.</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <!-- header bottom -->
        <div class="header-bottom  w-100">

            <div class="container-xl">
                <div class="d-flex align-items-center">
                    <div class="collapse navbar-collapse flex-grow-1">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('project.list') }}">Projek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article') }}">Artikel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.html">Tentang Kami</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('aboutme') }}">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('kebijakanlayanan') }}">Syarat dan
                                            Ketentuan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('contact') }}">Kontak</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header buttons -->
                    <div class="header-buttons">
                        <button class="search icon-button">
                            <i class="icon-magnifier"></i>
                        </button>
                        <button class="burger-menu icon-button ms-2 float-end float-lg-none">
                            <span class="burger-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>

</header>
