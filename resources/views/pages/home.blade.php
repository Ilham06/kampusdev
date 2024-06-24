@extends('layouts.frontpage')

@section('content')
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
                                <a href="category.html" class="category-badge position-absolute">Baru</a>

                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{ asset('storage/' . $project->banner) }}" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details">
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" class="fw-bold">{{ $project->category->alias }}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        {{ \Carbon\Carbon::parse($project->created_at)->format('d-m-Y') }}</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3">
                                    <a href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a>
                                </h5>
                            </div>
                            <div class="post-bottom d-flex align-items-center justify-content-between">
                                <div class="">
                                    <a href="#" class="tag">{{ json_decode($project->technologies)[0] }} </a>
                                </div>
                                <div class="more-button float-end">
                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav> --}}
        </div>
        <div class="col-lg-4">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- widget about -->

                <!-- widget popular posts -->
                <div class="widget rounded">
                    <div class="widget-header text-center">
                        <h3 class="widget-title">Projek Terpopuler</h3>
                        <img src="images/wave.svg" class="wave" alt="wave" />
                    </div>
                    <div class="widget-content">
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details clearfix">
                                <h6 class="post-title my-0">
                                    <a href="blog-single.html">Forecasting metode DES</a>
                                </h6>
                                <ul class="meta list-inline mt-1 mb-0">
                                    <li class="list-inline-item">105 kali dilihat</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details clearfix">
                                <h6 class="post-title my-0">
                                    <a href="blog-single.html">Forecasting metode DES</a>
                                </h6>
                                <ul class="meta list-inline mt-1 mb-0">
                                    <li class="list-inline-item">105 kali dilihat</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details clearfix">
                                <h6 class="post-title my-0">
                                    <a href="blog-single.html">Forecasting metode DES</a>
                                </h6>
                                <ul class="meta list-inline mt-1 mb-0">
                                    <li class="list-inline-item">105 kali dilihat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- widget categories -->
                @include('components.frontpage.sticky-category')
            </div>
        </div>
    </div>
@endsection
