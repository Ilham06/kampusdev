@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Review</h5>
                    <div class="mb-2">
                        <a href="{{ route('review.create') }}"><button class="btn btn-primary">Tambah Data</button></a>
                    </div>
                    <x-alert-success/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="fw-bold" scope="col">#</th>
                                <th class="fw-bold" scope="col">Projek</th>
                                <th class="fw-bold" scope="col">User</th>
                                <th class="fw-bold" scope="col">Review</th>
                                <th class="fw-bold" scope="col">Rating</th>
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
                                    <td>{{ $item->rate }}</td>
                                    <td>
                                        <form action="{{ route('review.destroy', $item->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger fw-semibold"
                                                onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</button>
                            
                                        </form>
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
