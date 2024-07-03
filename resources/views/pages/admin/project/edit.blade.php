@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form edit data projek</h5>
                    <form action="{{ route('project.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @include('components.forms.textfield', [
                            'name' => 'title',
                            'label' => 'Nama Projek',
                            'value' => $data->title,
                        ])
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih Kategori</label>
                            <select name="category_id" id="disabledSelect" class="form-select">
                                @foreach ($category as $item)
                                    <option @if ($item->id == $data->category_id) selected @endif value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi Projek</label>
                            <div id="project_description">
                                {!! $data->description !!}
                            </div>
                            <textarea rows="3" class="mb-3 d-none" name="description" id="quill-editor-area">
                                {!! $data->description !!}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Banner</label>
                            <input name="banner" class="form-control" type="file" id="formFile">

                            <img class="mt-3" width="100%" src={{ asset('storage/' . $data->banner) }} alt="">
                        </div>

                        @include('components.forms.textfield', [
                            'name' => 'price',
                            'label' => 'Harga',
                            'value' => $data->price
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'demo_url',
                            'label' => 'Demo Url',
                            'value' => $data->demo_url,
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'video_demo_url',
                            'label' => 'Vidio Demo Url',
                            'value' => $data->video_demo_url,
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'features',
                            'label' => 'Fitur',
                            'value' => $data->featuresAsString,
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'technologies',
                            'label' => 'Teknologi',
                            'value' => $data->technologiesAsString,
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'buy_packages',
                            'label' => 'Paket Pembelian',
                            'value' => $data->packagesAsString,
                        ])

                        @include('components.forms.textfield', [
                            'name' => 'other_information',
                            'label' => 'Informasi Tambahan',
                            'value' => $data->other_information,
                        ])

                        <div class="row images_container mb-3">
                            <label for="formFile" class="form-label">Screenshot Projek</label>
                            @foreach ($data->project_images as $key => $images)
                                <div class="row mb-3 image_field">
                                    <input type="hidden" value="{{$images->id}}" name="images[{{ $key }}][id]">
                                    <div class="col">
                                        <input class="form-control" value="{{ $images->label }}" type="text"
                                            name="images[{{ $key }}][label]" placeholder="Label">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="file" name="images[{{ $key }}][file]">
                                        <img width="100%" src="{{asset('storage/'.$images->path)}}" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-danger remove-image-field">Remove</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-secondary add-image-field">Add Image</button>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
