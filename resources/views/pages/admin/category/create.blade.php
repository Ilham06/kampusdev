@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form tambah data kategori</h5>
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        @include('components.forms.textfield', [
                            'name' => 'name',
                            'label' => 'Nama Kategori'
                        ])
                        @include('components.forms.textfield', [
                            'name' => 'alias',
                            'label' => 'Alias'
                        ])
                        @include('components.forms.textfield', [
                            'name' => 'description',
                            'label' => 'Deskripsi Kategori'
                        ])
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
