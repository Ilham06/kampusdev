<header class="header-classic">

    <div class="container-xl">
        <!-- header top -->
        <div class="header-top">
            <div class="row align-items-center">

                <div class="col-md-4 col-xs-12">
                    <!-- site logo -->

                    <a class="d-block text-logo" href="/">Kampusdev<span class="dot">.</span></a>
                </div>

                <div class="col-md-8 d-none d-md-block">
                    <!-- social icons -->
                    <ul class="social-icons list-unstyled list-inline mb-0 float-end">
                        <li class="list-inline-item"><a href="https://wa.me/62{{ config('general.phone') }}"><i
                                    class="fab fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>

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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="nav-item {{ Request::path() == 'project' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('project.list') }}">Projek</a>
                            </li>
                            <li class="nav-item {{ Request::path() == 'artikel' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('article') }}">Artikel</a>
                            </li>

                            <li class="nav-item dropdown {{ in_array(Request::path(), ['tentang-kami', 'faq', 'kebijakan-layanan']) ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#">Tentang Kami</a>
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
                            <li class="nav-item {{ Request::path() == 'kontak' ? 'active' : '' }}">
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
