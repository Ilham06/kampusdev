@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form tambah data projek</h5>
                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('components.forms.textfield', [
                            'name' => 'title',
                            'label' => 'Nama Projek',
                        ])
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih Kategori</label>
                            <select name="category_id" id="disabledSelect" class="form-select">
                                @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi Projek</label>
                            <div id="project_description">

                            </div>
                            <textarea rows="3" class="mb-3 d-none" name="description" id="quill-editor-area"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Banner</label>
                            <input name="banner" class="form-control" type="file" id="formFile">
                        </div>

                        @include('components.forms.textfield', [
                            'name' => 'demo_url',
                            'label' => 'Demo Url',
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'video_demo_url',
                            'label' => 'Vidio Demo Url',
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'features',
                            'label' => 'Fitur',
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'technologies',
                            'label' => 'Teknologi',
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'buy_packages',
                            'label' => 'Paket Pembelian',
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'other_information',
                            'label' => 'Informasi Tambahan',
                        ])

                        <div class="row images_container mb-3">
                            <label for="formFile" class="form-label">Screenshot Projek</label>
                            <div class="row mb-3 image_field">
                                <div class="col">
                                    <input class="form-control" type="text" name="images[][label]" placeholder="Label">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="file" name="images[][file]">
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger remove-image-field">Remove</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary add-image-field">Add Image</button>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
