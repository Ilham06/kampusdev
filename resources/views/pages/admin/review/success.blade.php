@extends('layouts.blank')

@section('content')
    <div class="loader">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <img src="{{ asset('assets/images/success.png') }}" width="60" alt="" />
                        </div>
                        <div class="authent-text">
                            <h3 class="fw-bold mb-3">Terimakasih</h3>
                            <p>Review anda sudah kami terima, terimakasih sudah meluangkan waktu anda untuk memberi feedback kepada kami.</p>
                            <a href="">
                                <div class="mt-2">
                                    <button class="btn btn-info m-b-xs">
                                        Kembali
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
