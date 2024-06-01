@extends('layout.master')

@section('content')
    <h1>Tambah Data Pemain</h1>

    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" class="form-control" id="bio"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
