@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Testimoni Project</h5>
                    <div class="mb-2">
                        <a href="{{ route('testimoni.create') }}"><button class="btn btn-primary">Tambah Data</button></a>
                    </div>
                    <x-alert-success/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="fw-bold" scope="col">#</th>
                                <th class="fw-bold" scope="col">Projek</th>
                                <th class="fw-bold" scope="col">User</th>
                                <th class="fw-bold" scope="col">Catatan</th>
                                <th class="fw-bold" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $item->project->title }}</td>
                                    <td>{{ $item->user }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>
                                       @include('components.table-action-button', [
                                          'edit' => route('testimoni.edit', $item['id']),
                                          'deleteRoute' => route('testimoni.destroy', $item['id'])
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
