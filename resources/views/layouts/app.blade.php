{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Circl - Responsive Admin Dashboard Template</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="loader">
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    <div class="page-container">
        @include('partials.navbar')
        @include('partials.sidebar')
        <div class="page-content">
            <div class="main-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
        var editor = new Quill('#project_description', {
            theme: 'snow'
        });
        var quillEditor = document.getElementById('quill-editor-area');
        editor.on('text-change', function() {
            quillEditor.value = editor.root.innerHTML;
        });

        quillEditor.addEventListener('input', function() {
            editor.root.innerHTML = quillEditor.value;
        });

        document.addEventListener('DOMContentLoaded', function() {
        const addImageButton = document.querySelector('.add-image-field');
        const imagesContainer = document.querySelector('.images_container');
        
        addImageButton.addEventListener('click', function() {
            const index = imagesContainer.children.length;
            const newImageField = document.createElement('div');
            newImageField.classList.add('row', 'mb-3', 'image_field');
            
            newImageField.innerHTML = `
                <div class="col">
                    <input class="form-control" type="text" name="images[${index}][label]" placeholder="Label">
                </div>
                <div class="col">
                    <input class="form-control" type="file" name="images[${index}][file]">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger remove-image-field">Remove</button>
                </div>
            `;
            
            newImageField.querySelector('.remove-image-field').addEventListener('click', function() {
                newImageField.remove();
            });
            
            imagesContainer.appendChild(newImageField);
        });

        document.querySelectorAll('.remove-image-field').forEach(button => {
            button.addEventListener('click', function() {
                button.closest('.image_field').remove();
            });
        });
    });
    </script>
</body>

</html>
