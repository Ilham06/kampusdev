@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form tambah review</h5>
                    <form action="{{ route('review.get-form') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih Project</label>
                            <select name="project_id" id="disabledSelect" class="form-select">
                                @foreach ($projects as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
