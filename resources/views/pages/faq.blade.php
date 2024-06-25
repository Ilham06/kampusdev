@extends('layouts.frontpage')

@section('content')
    <!-- page header -->
    <section class="page-header">
      <div class="container-xl">
        <div class="text-center">
          <h1 class="mt-0 mb-2">Frequently Asked Questions</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Frequently Asked Questions
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
                      Jawaban lengkap untuk pertanyaan yang sering diajukan, membantu Anda <br> mendapatkan informasi yang Anda butuhkan.
                    </p>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div id="accordionFlushExample" class="accordion">
                    
                      <!-- FAQ 2 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Apa layanan yang ditawarkan oleh Kampusdev?
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Kami menyediakan program aplikasi untuk tugas kuliah, praktikum, skripsi, serta pengembangan berbagai jenis proyek program seperti aplikasi dan sistem informasi. Tim kami siap membantu Anda menyelesaikan proyek-proyek ini dengan kualitas terbaik dan tepat waktu.
                          </div>
                        </div>
                      </div>
                    
                      <!-- FAQ 3 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Bagaimana cara menggunakan layanan Kampusdev?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Untuk menggunakan layanan kami, Anda dapat menghubungi tim kami melalui detail projek yang anda inginkan, atau informasi kontak di website ini. Kami akan merespons secepat mungkin untuk mendiskusikan kebutuhan Anda dan menyediakan solusi yang sesuai.
                          </div>
                        </div>
                      </div>
                    
                      <!-- FAQ 4 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Apakah layanan Kampusdev terjamin kerahasiaannya?
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Ya, privasi dan kerahasiaan Anda adalah prioritas utama kami. Kami menjamin bahwa semua informasi yang Anda berikan kepada kami akan dijaga dengan ketat dan tidak akan dibagikan kepada pihak ketiga.
                          </div>
                        </div>
                      </div>
                    
                      <!-- FAQ 5 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Bagaimana sistem pembayaran di Kampusdev?
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Kami menerima berbagai metode pembayaran yang fleksibel, termasuk transfer bank, e-wallet, dan lain lain yang disepakati bersama. Detail pembayaran akan diberikan setelah Anda menyetujui penawaran dari kami.
                          </div>
                        </div>
                      </div>
                    
                      <!-- FAQ 6 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Apakah Kampusdev menyediakan layanan revisi?
                          </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Ya, kami menyediakan layanan revisi untuk memastikan bahwa hasil pekerjaan yang kami berikan sesuai dengan harapan Anda. Jika Anda memiliki permintaan revisi, silakan hubungi kami dan kami akan segera mengaturnya.
                          </div>
                        </div>
                      </div>
                    
                      <!-- FAQ 7 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            Bagaimana kebijakan pengembalian uang di Kampusdev?
                          </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Kami tidak memiliki kebijakan pengembalian uang karena sifat layanan yang kami berikan bersifat kustom dan unik untuk setiap klien. Namun, kami akan bekerja keras untuk memastikan bahwa Anda puas dengan hasil kerja kami.
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
      </div>
    </section>
@endsection