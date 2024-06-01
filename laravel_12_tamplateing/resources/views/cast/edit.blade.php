@extends('layout.master')

@section('content')
    <h1>Edit Data Pemain</h1>

    <form action="{{ route('cast.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $cast->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{ $cast->umur }}" required>
        </div>
        <div class="form-group">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio">{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
