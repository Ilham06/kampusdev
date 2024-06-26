@extends('layouts.frontpage')

@section('content')
    <div class="container">
        <div class="">
            <h4>Halo, {{ $greeting }}.. <br> lagi cari projek apa hari ini?</h4>
        </div>
        <form action="{{ route('project.list') }}">
            <div class="form-group d-flex gap-2">
                <input type="text" class="form-control" name="title" id="title" placeholder="Cari project ..." />
                <button type="submit" id="submit" value="Submit" class="btn btn-default">Cari</button>
            </div>
        </form>
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="row gy-4">


                    @foreach ($projects as $project)
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="#"
                                        class="category-badge position-absolute">{{ $project->category->alias }}</a>

                                    <a href="{{ route('project.detail', $project->slug) }}">
                                        <div class="inner">
                                            <img src="{{ asset('storage/' . $project->banner) }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="fw-semibold">{{ json_decode($project->technologies)[0] }}</a>
                                        </li>
                                        <li class="list-inline-item">
                                            {{ \Carbon\Carbon::parse($project->created_at)->format('d M Y') }}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3">
                                        <a href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="widget rounded mt-5">
                    <div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
                        <a href="#" class="d-block text-logo mb-4">KampusDev<span class="dot">.</span></a>
                        <p class="mb-4">Hello.. tidak menemukan projek yang kamu cari? atau butuh jasa pembuatan website
                            untuk
                            edukasi, bisnis, atau perusahaan kamu? kami ada 24/7 menyediakan kebutuhanmu.</p>
                        <a target="_blank" href="https://wa.me/62{{ config('general.phone') }}"><button
                                class="btn btn-default">Hubungi kami</button></a>

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- widget about -->

                    <!-- widget popular posts -->
                    <div class="widget rounded">
                        <div class="widget-header text-center mb-5">
                            <h3 class="widget-title">Projek Terpopuler</h3>
                        </div>
                        <div class="widget-content">
                            <!-- post -->
                            @foreach ($populars as $popular)
                                <div class="post post-list-sm circle">
                                    <div class="thumb rounded mt-2">
                                        <a href="#">
                                            <div class="inner">
                                                <img src="{{ asset('storage/' . $popular->banner) }}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0">
                                            <a
                                                href="{{ route('project.detail', $popular->slug) }}">{{ $popular->title }}</a>
                                        </h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">{{ $popular->visit_count }} kali dilihat
                                            </li>
                                        </ul>
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
@endsection

;/
