@extends('layouts.frontpage')

@section('title', 'Kebijakan dan layanan - Kampus DEV')

@section('content')
    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Kebijakan Layanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kebijakan Layanan
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
                                <div class="text-center mb-5">
                                    {{-- <h3>Frequently Asked Questions</h3> --}}
                                    <p>
                                        Terima kasih telah memilih layanan kampusdev. Kebijakan Layanan ini menetapkan
                                        ketentuan penggunaan layanan kami dan hak serta kewajiban antara kami dan Anda
                                        sebagai pengguna layanan. Harap baca kebijakan ini dengan seksama.
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">1. Penerimaan Syarat</h3>
                                    <p>Dengan menggunakan layanan kami, Anda setuju untuk mematuhi kebijakan ini. Jika
                                        Anda tidak setuju dengan kebijakan ini, harap jangan menggunakan layanan kami.</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">
                                        2. Ruang lingkup pelayanan
                                    </h3>
                                    <p>Kami menyediakan distribusi aplikasi serta layanan pembuatan website yang mencakup
                                        desain, pengembangan, pengujian, dan peluncuran website untuk berbagai keperluan
                                        seperti edukasi, perkuliahan, bisnis, company profile dan lain lain, serta layanan
                                        tambahan seperti konsultasi dan dukungan teknis juga tersedia.</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">3. Perlindungan data</h3>
                                    <p>Kami berkomitmen untuk melindungi privasi dan keamanan data Anda. Informasi yang Anda
                                        berikan akan digunakan hanya untuk keperluan transaksi dan dukungan layanan sesuai
                                        dengan Kebijakan Privasi kami.</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">4. Penggunaan Layanan</h3>
                                    <ul>
                                        <li>Tanggung Jawab Pengguna: Anda bertanggung jawab untuk menggunakan source code
                                            sesuai dengan ketentuan yang telah disepakati dan mematuhi semua hukum dan
                                            peraturan yang berlaku.</li>
                                        <li>Kepatuhan: Anda setuju untuk tidak menggunakan source code untuk tujuan ilegal
                                            atau yang melanggar hak-hak pihak ketiga.</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">5. Pembayaran</h3>
                                    <ul>
                                        <li>Struktur Pembayaran: Pembayaran dilakukan sebelum pengiriman source code. Metode
                                            pembayaran yang diterima termasuk transfer bank, dan metode pembayaran
                                            elektronik lainnya yang telah disepakati.</li>
                                        <li>
                                            Kebijakan Pengembalian: Pengembalian dana hanya dapat dilakukan jika source code
                                            yang diterima tidak sesuai dengan deskripsi atau tidak berfungsi sebagaimana
                                            mestinya, dengan ketentuan bahwa klaim harus diajukan dalam waktu 14 hari
                                            setelah pembelian.</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">6. Revisi dan pembatalan</h3>
                                    <ul>
                                        <li>Proses Revisi: Permintaan revisi terhadap source code dapat dikenakan biaya
                                            tambahan tergantung pada kompleksitas dan lingkup perubahan yang diminta.</li>
                                        <li>
                                            Persetujuan: Semua revisi harus disetujui oleh kedua belah pihak sebelum
                                            dilaksanakan.</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">7. Hak cipta dan kepemilikan</h3>
                                    <ul>
                                        <li>Hak Cipta: Kami tetap memegang hak cipta atas source code yang dijual. Pembelian
                                            source code memberikan Anda lisensi non-eksklusif untuk menggunakan kode
                                            tersebut sesuai dengan ketentuan yang telah disepakati.
                                        </li>
                                        <li>Lisensi: Lisensi penggunaan source code dapat bersifat pribadi, komersial, atau
                                            multi-lisensi.</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                 <h3 class="mb-2">
                                    8. Garansi dan dukungan
                                 </h3>
                                 <ul>
                                    <li>Garansi: Kami memberikan garansi (technical support) mulai dari 7 hari hingga durasi yang disepakati sejak hasil proyek diterima.
                                       </li>
                                       <li>Dukungan Teknis: Support diberikan via WhatsApp dan Email yang dilayani pada jam kerja (09.00 – 15.00 WIB).</li>
                                 </ul>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-2">9. Ketentuan pembuatan aplikasi</h3>
                                    <ul>
                                        <li>Anda wajib membayar DP sebesar 60% dari harga di awal melalui transfer ke
                                            rekening kami. Sisa pembayaran wajib dilunasi setelah aplikasi selesai.
                                        </li>
                                        <li>Proses pembuatan aplikasi dilakukan setelah kami menerima uang muka dengan
                                            nominal sesuai dengan persentase yang telah disebutkan di atas.</li>
                                        <li>Kami tidak dapat melakukan pengembalian dana yang sudah dibayarkan kepada kami
                                            jika terjadi pembatalan proyek atas dasar permintaan Anda sendiri.</li>
                                        <li>Waktu pembuatan aplikasi berkisar antara 30 hari (untuk sistem yang standar)
                                            hingga 90 hari kerja (untuk sistem yang kompleks). Durasi ini tidak mutlak dan
                                            berlaku sesuai dengan tingkat kerumitan, kesepakatan awal, serta kesediaan data
                                            yang dibutuhkan oleh kami.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
