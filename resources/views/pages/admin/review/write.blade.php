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
                            <img src="../../assets/images/avatars/profile-image.png" width="60" alt="" />
                        </div>
                        <div class="authent-text">
                            <p class="fw-bold">Hallo ...</p>
                            <p>Terimakasih telah mempercayai kami untuk solusi kodingmu, review kamu akan sangat membantu
                                kamu untuk meingkatkan kualitas bagi kami!.</p>
                        </div>
                        <form action="{{ route('review.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $id }}" name="project_id">
                            <div class="mb-3">
                                <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                    <input type="radio" id="star5" name="rate" value="5" /><label
                                        for="star5" title="5 star"></label>
                                    <input type="radio" id="star4" name="rate" value="4" /><label
                                        for="star4" title="4 star"></label>
                                    <input type="radio" id="star3" name="rate" value="3" /><label
                                        for="star3" title="3 star"></label>
                                    <input type="radio" id="star2" name="rate" value="2" /><label
                                        for="star2" title="2 star"></label>
                                    <input checked type="radio" id="star1" name="rate" value="1" /><label
                                        for="star1" title="1 star"></label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="user" type="text"
                                        class="form-control @error('user')
                                  is-invalid
                                  @enderror"
                                        id="user" placeholder="user" />
                                    <label for="user">Nama Kamu</label>
                                    @error('user')
                                        <div id="" class="invalid-feedback">
                                            Nama tidak boleh kosong
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="note" type="text"
                                        class="form-control @error('note')
                                    is-invalid
                                    @enderror"
                                        id="review" placeholder="review" />
                                    <label for="review">Review Project</label>
                                    @error('note')
                                        <div id="" class="invalid-feedback">
                                            Review tidak boleh kosong
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
