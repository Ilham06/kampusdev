@extends('layouts.frontpage')

@section('title', 'Tentang Kami - Kampus DEV')

@section('content')
    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Tentang Kami</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tentang Kami
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- section main content -->
    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="page-content rounded padding-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="">
                                    <h2 class="">
                                        Temukan solusi koding <br />
                                        kampusmu disini
                                    </h2>
                                    <p>
                                        Selamat datang di Kampusdev, solusi terbaik untuk kebutuhan akademik koding kampus
                                        Anda. Kami memahami bahwa tugas kuliah, praktikum, dan skripsi seringkali menjadi
                                        tantangan besar bagi banyak mahasiswa. Dari tenggat waktu yang ketat hingga
                                        kompleksitas materi, menjalani kehidupan akademik memang tidak selalu mudah. Oleh
                                        karena itu, kami hadir untuk memberikan bantuan yang Anda butuhkan dengan
                                        profesionalisme dan kualitas tinggi.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="{{ asset('assets/fontpage/images/other/about.jpeg') }}" alt="Katen Doe"
                                    class="rounded mb-4" />
                            </div>
                            <div class="col-lg-12">
                                <p>
                                    Kami hadir untuk berdedikasi dalam membantu menyediakan berbagai program dan
                                    solusi yang inovatif di bidang teknologi dan edukasi. Dengan pengalaman bertahun-tahun
                                    dan tim yang ahli di bidangnya, kami menawarkan layanan yang dapat membantu Anda dalam
                                    berbagai proyek akademik dan penelitian dengan teknologi yang fleksibel dan terbaru.
                                </p>
                            </div>
                        </div>

                        <div class="slider mt-4"
                            style="--width: 50px; --height: 50px; --quantity: {{ count(config('general.techstacks')) }}">
                            <div class="list">
                                @foreach (config('general.techstacks') as $key => $stack)
                                    <div class="item" style="--position: {{ $key + 1 }}">
                                        <img src="{{ asset($stack) }}" alt="" />
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center">
                                    <!-- <img src="images/logo.svg" alt="logo" class="mb-4" /> -->
                                    <h3>Bangun websitemu bersama kami</h3>
                                    <p class="mb-4">
                                        Mari bangun websitemu bersama kami dan wujudkan kehadiran digital
                                        yang kuat dan profesional. Hubungi kami sekarang untuk konsultasi gratis dan
                                        dapatkan solusi terbaik untuk kebutuhan Anda!
                                    </p>
                                    <div class="">
                                        <button class="btn btn-default" type="submit">
                                            Hubungi kami
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
