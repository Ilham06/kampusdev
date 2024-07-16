@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Project</h5>
                    <div class="mb-2">
                        <a href="{{ route('project.create') }}"><button class="btn btn-primary">Tambah Data</button></a>
                    </div>
                    <x-alert-success />
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%" class="fw-bold" scope="col">#</th>
                                <th width="15%" scope="col" class="fw-bold">Banner</th>
                                <th class="fw-bold" scope="col">Nama Projek</th>
                                <th class="fw-bold" scope="col">Kategori</th>
                                <th class="fw-bold" scope="col">Total Pengunjung</th>
                                <th class="fw-bold" scope="col">Total Di Klik</th>
                                <th class="fw-bold" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        <img class="rounded-2 border" width='100%' src="{{ asset('storage/' . $item->banner) }}" alt="">
                                    </td>
                                    <td>{{ $item['title'] }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{$item->visit_count_total}}</td>
                                    <td>{{$item->visit_count}}</td>
                                    <td>
                                        @include('components.table-action-button', [
                                            'edit' => route('project.edit', $item['slug']),
                                            'deleteRoute' => route('project.destroy', $item['id']),
                                        ])
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        tidak ada data ditemukan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
