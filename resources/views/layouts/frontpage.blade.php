<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Kampus Dev - Solusi Koding Kampusmu</title>
    <meta name="description" content="Temukan solusi koding terbaik dan artikel terbaru di Kampus Dev. Bergabunglah dengan komunitas kami untuk memperdalam pengetahuan teknologi." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/main-logo.png') }}" />

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/all.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/slick.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/simple-line-icons.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- preloader -->
    <div class="loader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">
        <div class="main-overlay"></div>

        <!-- header -->
        @if (request()->is('/'))
            @include('components.frontpage.main-navbar')
        @else
            @include('components.frontpage.second-navbar')
        @endif


        <!-- section main content -->
        <section class="main-content mb-5 pb-5">
            <div class="">
                @yield('content')
            </div>
        </section>

        <!-- footer -->
        @include('components.frontpage.footer')
    </div>
    <!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Projek apa yang ingin anda cari?</h3>
            </div>
            <!-- form -->
            <form action="{{ route('project.list') }}">
                <div class="form-group d-flex gap-2">
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="nama project ..." />
                    <button type="submit" id="submit" value="Submit" class="btn btn-default">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <a href="personal.html" class="d-block text-logo">KampusDev<span class="dot">.</span></a>
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('project.list') }}">Projek</a>
                </li>
                <li>
                    <a href="{{ route('article') }}">Artikel</a>
                </li>
                <li class="">
                    <a href="#">Tentang Kami</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('aboutme') }}">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('kebijakanlayanan') }}">Syarat dan
                                Ketentuan</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </nav>

        <!-- social icons -->
        {{-- <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-medium"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul> --}}
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('assets/fontpage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/fontpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/fontpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fontpage/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/fontpage/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/fontpage/js/custom.js') }}"></script>
</body>

</html>
