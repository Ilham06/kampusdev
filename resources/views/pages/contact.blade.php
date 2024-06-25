@extends('layouts.frontpage')

@section('content')
    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Kontak</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kontak
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
                            <div class="col">
                                <div class="text-center mb-4">
                                    {{-- <h3>Frequently Asked Questions</h3> --}}
                                    <p>
                                        Apakah Anda memiliki pertanyaan atau permintaan khusus? Tim kami siap membantu Anda
                                        dengan cepat dan efektif. Jangan ragu untuk menghubungi kami kapan saja.
                                    </p>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <!-- contact info item -->
                                        <div class="contact-item bordered rounded d-flex align-items-center">
                                            <span class="icon icon-phone"></span>
                                            <div class="details">
                                                <h3 class="mb-1 mt-0">Whatsapp</h3>
                                                <a target="_blank" class="main-color" href="https://wa.me/62{{ config('general.phone') }}">
                                                    <p class="mb-0">+62 {{ config('general.phone') }}</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- contact info item -->
                                        <div class="contact-item bordered rounded d-flex align-items-center">
                                            <span class="icon icon-envelope-open"></span>
                                            <div class="details">
                                                <h3 class="mb-1 mt-0">E-Mail</h3>
                                                <a target="_blank" class="main-color" href="mailto:support@kampusdev.com">
                                                  <p class="mb-0">support@kampusdev.com</p>
                                              </a>
                                            </div>
                                        </div>
                                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- contact info item -->
                                        <div class="contact-item bordered rounded d-flex align-items-center">
                                            <span class="icon icon-map"></span>
                                            <div class="details">
                                                <h3 class="mb-0 mt-0">Location</h3>
                                                <a target="_blank" class="main-color" href="https://maps.app.goo.gl/amJbh6EJpJocCqiq5">
                                                  <p class="mb-0">Mampang, Jakarta Selatan</p>
                                              </a>
                                            </div>
                                        </div>
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
