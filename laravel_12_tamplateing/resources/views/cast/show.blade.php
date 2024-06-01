@extends('layout.master')

@section('content')
    <h1>Detail Pemain Film</h1>
    <div class="card">
        <div class="card-body">
            <p class="nama"><strong>Nama:</strong> {{ $cast->nama }}</p>
            <p class="umur"><strong>Jenis Kelamin:</strong> {{ $cast->umur }}</p>
            <p class="bio"><strong>Peran:</strong> {{ $cast->bio }}</p>
        </div>
    </div>

    <a href="{{ route('cast.index') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
@endsection
