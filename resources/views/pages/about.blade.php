@extends('layouts.frontpage')

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
                                    Kami hadir untuk untuk berdedikasi dalam membantu menyediakan berbagai program dan
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

                        {{-- <div class="row mt-5">
                <div class="text-center mb-4">
                  <h3>Mengapa memilih kami?</h3>
                  <p>
                    Kami menawarkan lebih dari sekadar layanan program kebutuhan study anda yang akan mempermudah <br> kebutuhan anda. Berikut adalah alasan mengapa Anda harus memilih kami:
                  </p>
                </div>
                <div class="col-md-4">
                  <!-- contact info item -->
                  <div class="contact-item bordered rounded">
                    <!-- <span class="icon icon-phone"></span> -->
                    <div class="details ms-0">
                      <h3 class="mb-2 mt-0">Profesionalisme dan Kualitas</h3>
                      <p class="mb-0">
                        Kami menjamin hasil yang berkualitas tinggi dan memenuhi standar yang diharapkan.
                      </p>
                    </div>
                  </div>
                  <!-- <div class="spacer d-md-none d-lg-none" data-height="30"></div> -->
                </div>

                <div class="col-md-4">
                  <!-- contact info item -->
                  <div class="contact-item bordered rounded">
                    <!-- <span class="icon icon-phone"></span> -->
                    <div class="details ms-0">
                      <h3 class="mb-2 mt-0">Harga Kompetitif</h3>
                      <p class="mb-0">
                        Kami menawarkan layanan berkualitas dengan harga yang terjangkau untuk kepuasan pelanggan.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <!-- contact info item -->
                  <div class="contact-item bordered rounded">
                    <!-- <span class="icon icon-phone"></span> -->
                    <div class="details ms-0">
                      <h3 class="mb-2 mt-0">Dukungan Pelanggan</h3>
                      <p class="mb-0">
                        Tim layanan pelanggan kami selalu siap membantu Anda dengan segala pertanyaan dan kebutuhan Anda.
                      </p>
                    </div>
                  </div>
                </div>
              </div> --}}

                        <div class="row mt-5">
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center">
                                    <!-- <img src="images/logo.svg" alt="logo" class="mb-4" /> -->
                                    <h3>Bangun websitemu bersama kami</h3>
                                    <p class="mb-4">
                                        Kami menyediakan Mari bangun websitemu bersama kami dan wujudkan kehadiran digital
                                        yang kuat dan profesional. Hubungi kami sekarang untuk konsultasi gratis dan
                                        dapatkan solusi terbaik untuk kebutuhan Anda!
                                    </p>
                                    <!-- <ul class="social-icons list-unstyled list-inline mb-0">
                                 <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                               </ul> -->
                                    <div class="">
                                        <button class="btn btn-default" type="submit">
                                            Hubungi kami
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row mt-5">
                <div class="widget rounded">
                  <div class="widget-about data-bg-image text-center">
                    <!-- <img src="images/logo.svg" alt="logo" class="mb-4" /> -->
                    <h3>Bangun websitemu bersama kami</h3>
                    <p class="mb-4">
                     Kami menyediakan Mari bangun websitemu bersama kami dan wujudkan kehadiran digital yang kuat dan profesional. Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi terbaik untuk kebutuhan Anda!
                    </p>
                    <!-- <ul class="social-icons list-unstyled list-inline mb-0">
                      <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul> -->
                    <div class="">
                      <button class="btn btn-default" type="submit">
                        Hubungi kami
                      </button>
                    </div>
                  </div>
                </div>
              </div> --}}

                        {{-- <div class="row mt-5">
                <div class="text-center mb-4">
                  <h3>Apa kata klien kami?</h3>
                  <p>
                    Mendengar Langsung lebih banyak Feedback baik dari Klien Kami <br> yang telah Menggunakan jasa dan Layanan Kami
                  </p>
                </div>
                <div
                  class="slider"
                  reverse="true"
                  style="--width: 400px; --height: 400px; --quantity: 9"
                >
                  <div class="list">
                    <div class="item" style="--position: 1">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 2">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 3">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 4">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 5">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 6">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 7">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 8">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                    <div class="item" style="--position: 9">
                      <div class="contact-item bordered rounded">
                        <!-- <span class="icon icon-phone"></span> -->
                        <!-- <li class="rounded"> -->
                        <!-- <div class="thumb">
                            <img
                              src="images/other/3.png"
                              width="10%"
                              alt="John Doe"
                            />
                          </div> -->
                        <div class="details">
                          <h4 class="mb-1">Anna Doe</h4>
                          <div class="mb-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>
                            Cras ultricies mi eu turpis hendrerit fringilla.
                            Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia.
                          </p>
                        </div>
                        <!-- </li> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}

                        {{-- <div class="row mt-5">
                <div class="col">
                  <div class="text-center mb-4">
                    <h3>Frequently Asked Questions</h3>
                    <p>
                      Jawaban lengkap untuk pertanyaan yang sering diajukan, membantu Anda <br> mendapatkan informasi yang Anda butuhkan.
                    </p>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Apa itu Kampusdev?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kampusdev adalah platform yang menyediakan layanan joki tugas akademik dan proyek program lainnya. Kami membantu mahasiswa dan profesional menyelesaikan tugas kuliah, praktikum, skripsi, serta berbagai proyek pengembangan aplikasi dan sistem informasi dengan profesionalisme dan kualitas tinggi.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Layanan apa saja yang kami ditawarkan?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Joki tugas kuliah, Joki praktikum, Joki skripsi, Proyek pengembangan aplikasi, Sistem informasi, Proyek perangkat lunak lainnya</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
