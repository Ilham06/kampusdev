@extends('layouts.frontpage')

@section('title', $project->title .' - Kampus DEV')

@section('content')
    <section class="main-content mt-3">
        <div class="container-xl">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a
                            href="/project?category={{ $project->category->slug }}">{{ $project->category->alias }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $project->title }}
                    </li>
                </ol>
            </nav>

            <div class="row gy-4">
                <div class="col-lg-8">
                    <!-- post single -->
                    <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">
                                {{ $project->title }}
                            </h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#">{{ $project->user->name }}</a>
                                </li>
                                <li class="list-inline-item fw-bold">
                                    <a href="/project?category={{ $project->category->slug }}" class="fw-bold">{{ $project->category->name }}</a>
                                </li>
                                <li class="list-inline-item">
                                    {{ \Carbon\Carbon::parse($project->created_at)->format('d M Y') }}</li>
                            </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                            <img src="{{ asset('storage/' . $project->banner) }}" alt="aplikasi-{{$project->slug}}" />
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                            <h4>Deskripsi Projek</h4>
                            <p>
                                {!! $project->description !!}
                            </p>

                            <h4>Screenshot Projek</h4>
                            <p>
                                Berikut Screenshot projek di setiap halaman-halaman yang ada.
                            </p>

                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($project->project_images as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100"
                                            alt="aplikasi-{{$project->slug}}">
                                            <div class="carousel-caption d-none d-md-block relative mt-3">
                                                <figcaption class="figure-caption text-center">
                                                    {{ $image->label }}
                                                </figcaption>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            @if ($project->demo_url)
                                <h4>Demo Aplikasi</h4>
                                <p>
                                    berikut adalah link demo untuk mencoba aplikasi. dalam mode demo ini, beberapa fitur tidak dapat diakses atau digunakan.
                                </p>
                                <a href="{{$project->demo_url}}">{{$project->demo_url}}</a>
                            @endif

                            @if ($project->video_demo_url)
                                <h4>Demo Projek</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Officiis, consequatur.
                                </p>
                                <figure class="figure">
                                    <img src="images/posts/post-lg-2.jpg" class="figure-img img-fluid rounded"
                                        alt="..." />
                                    <figcaption class="figure-caption text-center">
                                        A caption for the above image.
                                    </figcaption>
                                </figure>
                            @endif

                            <h4>Fitur Projek</h4>
                            <p>
                                Berikut fitur fitur unggulan dalam project ini.
                            </p>
                            <ul>
                                @foreach (json_decode($project->features) as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>

                            <h4>Teknologi yang dipakai</h4>
                            <p>
                                Berikut teknologi yang dipakai dalam pembuatan project ini.
                            </p>
                            <ul>
                                @foreach (json_decode($project->technologies) as $tech)
                                    <li>{{ $tech }}</li>
                                @endforeach
                            </ul>

                            <h4>Benefit pembelian</h4>
                            <p>
                                Berikut yang akan anda dapatkan jika membeli project ini.
                            </p>
                            <ul>
                                @foreach (json_decode($project->buy_packages) as $package)
                                    <li>{{ $package }}</li>
                                @endforeach
                            </ul>
                            <h4>Harga dan pembelian</h4>
                            <p>Anda dapat mendapatkan source code penuh dan benefit lain dari aplikasi ini dengan membayar sebesar <span class="fw-bold">Rp. {{number_format($project->price, 0, ',', '.')}} ,-</span></p>
                        </div>
                    </div>

                    <p class="mt-5">Untuk pembelian, pemesanan dan dan informasi lainnya dari project ini atau yang lain,
                        dapat menghubungi kami melalui nomor WhatsApp pada 0858-7667-9865 atau dengan menekan tombol chat
                        dibawah ini.</p>
                        <a target="_blank" href="https://wa.me/62{{config('general.phone')}}"><button class="btn btn-default">Chat Whatsapp</button></a>

                    <div class="spacer" data-height="50"></div>

                    <div class="about-author padding-30 rounded">
                        <div class="thumb">
                            <img src="{{asset('assets/me.png')}}" alt="Katen Doe" />
                        </div>
                        <div class="details">
                            <h4 class="name"><a href="#">Ilham Muhamad</a></h4>
                            <p>
                                Haloo.. Saya Ilham Muhamad, seorang Software Engineer dengan pengalaman 3 tahun di industri programming di bidang startup, edukasi serta pemerintahan.
                            </p>
                            <!-- social icons -->
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.instagram.com/hayhamm_/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.linkedin.com/in/ilham-muhamad-suparyono-841102232/"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="spacer" data-height="50"></div>


                </div>

                <div class="col-lg-4">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget about -->

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Projek Terkait</h3>
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                @foreach ($related_projects as $related)
                                    <div class="post post-list-sm circle">
                                        <div class="thumb rounded mt-2">
                                            <div class="inner">
                                                <img src="{{ asset('storage/' . $related->banner) }}" alt="post-title" />
                                            </div>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a
                                                    href="{{ route('project.detail', $related->slug) }}">{{ $related->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- widget categories -->
                        @include('components.frontpage.sticky-category')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
