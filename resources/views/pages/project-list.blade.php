@extends('layouts.frontpage')

@section('content')
    <form action="{{ route('project.list') }}">
        <div class="form-group d-flex gap-2">
            <input value="{{ request()->get('title') }}" type="text" class="form-control" name="title" id="title"
                placeholder="Cari project ..." />
            @if (request()->get('category'))
                <input type="hidden" name="category" value="{{ request()->get('category') }}">
            @endif
            <div class="help-block with-errors"></div>
            <button type="submit" id="submit" class="btn btn-default">Cari</button>
        </div>
    </form>
    <div class="text-center">
        @if (request()->get('title'))
            <h3>Hasil pencarian untuk : {{ request()->get('title') }}</h3>
        @endif
    </div>
    <div class="text-center mb-5">
        <a href="{{ '/project?title=' . request()->get('title') }}"><button class="btn btn-simple">Semua</button></a>
        @foreach ($categories as $category)
            <a href="{{ '/project?title=' . request()->get('title') . '&category=' . $category->slug }}"><button
                    class="mx-1 btn btn-simple {{ request()->get('category') == $category->slug ? 'active' : '' }}">{{ $category->alias }}</button></a>
        @endforeach
    </div>
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="row gy-4">


                @foreach ($projects as $project)
                    <div class="col-sm-4">
                        <!-- post -->
                        <div class="post post-grid rounded bordered">
                            <div class="thumb top-rounded">
                                <a href="category.html" class="category-badge position-absolute">{{ $project->category->alias }}</a>

                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{ asset('storage/' . $project->banner) }}" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details">
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" class="">{{ json_decode($project->technologies)[0] }}</a>
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

                {{ $projects->links() }}

            </div>
        </div>

    </div>
@endsection
