@extends('layout.master')

@section('content')
    <h1>Daftar Pemain Film</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casts as $cast)
                <tr>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
