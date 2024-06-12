@props(['detail' => '', 'edit' => '', 'deleteRoute' => ''])

<div class="dropdown">
    <button class="btn btn-light border-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Aksi
    </button>
    <ul class="dropdown-menu border-0 mt-3">
        <li><a class="dropdown-item" href="{{ $edit }}">Detail</a></li>
        <li><a class="dropdown-item" href="{{ $edit }}">Edit data</a></li>
        <li>
            <form action="{{ $deleteRoute }}" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger fw-semibold"
                    onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</button>

            </form>
        </li>

    </ul>
</div>
