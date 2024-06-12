@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form edit data kategori</h5>
                    <form action="{{ route('category.update', $data['id']) }}" method="POST">
                        @method('PUT')
                        @csrf
                        @include('components.forms.textfield', [
                            'name' => 'name',
                            'label' => 'Nama Kategori',
                            'value' => $data['name'],
                        ])
                        @include('components.forms.textfield', [
                            'name' => 'alias',
                            'label' => 'Alias',
                            'value' => $data['alias'],
                        ])
                        @include('components.forms.textfield', [
                            'name' => 'description',
                            'label' => 'Deskripsi Kategori',
                            'value' => $data['description'],
                        ])
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
