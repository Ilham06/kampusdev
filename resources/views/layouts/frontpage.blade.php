<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/all.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/slick.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/simple-line-icons.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fontpage/css/style.css') }}" type="text/css" media="all" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
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
            <div class="container">
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
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search" />
                <button class="btn btn-default btn-lg" type="submit">
                    <i class="icon-magnifier"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="images/logo.svg" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Magazine</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="personal-alt.html">Personal Alt</a></li>
                        <li><a href="minimal.html">Minimal</a></li>
                        <li><a href="classic.html">Classic</a></li>
                    </ul>
                </li>
                <li><a href="category.html">Lifestyle</a></li>
                <li><a href="category.html">Inspiration</a></li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="category.html">Category</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-single-alt.html">Blog Single Alt</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
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
        </ul>
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
