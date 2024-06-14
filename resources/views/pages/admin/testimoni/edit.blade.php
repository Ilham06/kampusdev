@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form edit data testimoni</h5>
                    <form action="{{ route('testimoni.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih Project</label>
                            <select name="project_id" id="disabledSelect" class="form-select">
                                @foreach ($projects as $item)
                                    <option @if ($data->project_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @include('components.forms.textfield', [
                            'name' => 'user',
                            'label' => 'User',
                            'value' => $data->user,
                        ])
                        @include('components.forms.textfield', [
                            'name' => 'note',
                            'label' => 'Catatan',
                            'value' => $data->note,
                        ])
                        <div class="mb-3">
                            <label for="proof" class="form-label">Bukti Transfer</label>
                            <input name="proof" class="form-control" type="file" id="proof">
                            <img class="mt-3" width="50%" src="{{ asset('storage/' . $data->proof) }}" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
