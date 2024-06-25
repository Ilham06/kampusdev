@extends('layouts.frontpage')

@section('content')
    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Artikel</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Artikel
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

                        <div class="text-center">
                            <img width="50%" src="{{ asset('assets/fontpage/images/maintenance.png') }}" alt="">
                            <h5>Upss, halaman ini masih dalam pengembangan.</h5>
                            <a target="_blank" href="{{ URL::previous() }}"><button
                                    class="btn btn-default">kembali</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
